// Global declarations for external libraries loaded via script tags
declare const $: any;
declare const bootstrap: any;

$((): void => {
  'use strict';

  const forms = $('.needs-validation');

  forms.each((_index: number, element: HTMLElement): void => {
    const form = $(element);
    const submitForm = form.find('.submit_form');
    const subscribeButton = form.find('.btn_submit-subscribe');
    const successMsg = $('.success_msg');
    const errorMsg = $('.error_msg');
    const actionInput = form.find("input[name='action']");
    const successMsgSubscribe = $('.success_msg_subscribe');

    form.on('submit', (event: Event): void => {
      event.preventDefault();
      event.stopPropagation();

      const nativeForm = form[0] as HTMLFormElement;
      if (!nativeForm.checkValidity()) {
        return; // Exit early if the form is not valid
      }

      submitForm.html('Sending...');
      subscribeButton.html('Sending...');

      const toast = new bootstrap.Toast(successMsg[0]);
      const errtoast = new bootstrap.Toast(errorMsg[0]);

      const formData = form.serialize();

      $.ajax({
        type: 'POST',
        url: 'php/form_process.php',
        data: formData,
        success: (response: string): void => {
          if (response === 'success') {
            if (actionInput.length > 0) {
              subscribeButton.html('SUBSCRIBE');
              const toastSubscribe = new bootstrap.Toast(successMsgSubscribe[0]);
              toastSubscribe.show();
            } else {
              toast.show();
              submitForm.html('Send Message');
            }
          } else {
            errtoast.show();
            submitForm.html('Send Message');
            subscribeButton.html('SUBSCRIBE');
          }
        }
      });

      form.addClass('was-validated');
    });
  });
});
