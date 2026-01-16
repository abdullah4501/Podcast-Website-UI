<?php
    $env = parse_ini_file(__DIR__ . "/.env");

if (!$env) {
    die("Unable to load .env file");
}
$apiKey = $env['Youtube_API'] ?? null;
$playlistId  = $env['Play_List_ID'] ?? null;
?>
<?php
    function getPlaylistVideoIds($playlistId, $apiKey, $limit = 3, $sortBy = 'date')
    {
        $url = "https://www.googleapis.com/youtube/v3/playlistItems?part=contentDetails&maxResults=50&playlistId=$playlistId&key=$apiKey";

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);
        curl_close($ch);

        $data = json_decode($response, true);

        $videoIds = [];
        if (isset($data['items']) && is_array($data['items'])) {
            foreach ($data['items'] as $item) {
                if (isset($item['contentDetails']['videoId'])) {
                    $videoIds[] = $item['contentDetails']['videoId'];
                }
            }
        }

        return $videoIds;
    }

    function getVideosFromIds(array $videoIds, $apiKey, $sortBy = 'date')
    {
        if (empty($videoIds)) return [];

        $ids = implode(',', $videoIds);
        $url = "https://www.googleapis.com/youtube/v3/videos?part=snippet,contentDetails,statistics&id=$ids&key=$apiKey";

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        $data = json_decode($response, true);

        $videos = [];
        if (isset($data['items']) && is_array($data['items'])) {
            foreach ($data['items'] as $item) {
                $interval = new DateInterval($item['contentDetails']['duration']);
                $videos[] = [
                    "id"        => $item['id'],
                    "title"     => $item['snippet']['title'],
                    "date"      => strtotime($item['snippet']['publishedAt']),
                    "date_formatted" => date("d F Y", strtotime($item['snippet']['publishedAt'])),
                    "thumbnail" => $item['snippet']['thumbnails']['high']['url'],
                    "duration"  => ($interval->h ? $interval->h . "hr " : "") . $interval->i . "m",
                    "embed"     => "https://www.youtube.com/watch?v=" . $item['id'],
                    "views"     => $item['statistics']['viewCount'] ?? 0
                ];
            }
        }

        if ($sortBy === 'views') {
            usort($videos, function ($a, $b) {
                return $b['views'] - $a['views'];
            });
        } elseif ($sortBy === 'date') {
            usort($videos, function ($a, $b) {
                return $b['date'] - $a['date'];
            });
        }

        return $videos;
    }

    $showVideosSection = true;
    if (!$apiKey || !$playlistId) {
        $showVideosSection = false;
        $mostViewedVideos = [];
        $latestVideos = [];
    }

    if ($showVideosSection) {
        // Fetch all videos once; per-page templates decide how many to show
        $videoIds = getPlaylistVideoIds($playlistId, $apiKey, 50);

        // All videos sorted by views (desc)
        $allVideosByViews = getVideosFromIds($videoIds, $apiKey, 'views');

        // All videos sorted by date (desc)
        $allVideosByDate = getVideosFromIds($videoIds, $apiKey, 'date');
    } else {
        $allVideosByViews = [];
        $allVideosByDate = [];
    }
?>
