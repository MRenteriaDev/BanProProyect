@extends('dashboard-cliente')

@section('cliente-registrado-dashboard')
    <section class="payment-method notfound col-xs-12">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="tr-single-box">
                    <div class="tr-single-body">
                        <div class="tr-single-header">
                            <h4><i class="far fa-address-card pr-2"></i>Billing Information</h4>
                        </div>
                        <form class="row" action="{{ route('billding.post') }}" method="POST">
                            @csrf
                            <div class="col-sm-6">
                                <label>Nombre</label>
                                <input type="text" name="billing_name" class="form-control">
                            </div>
                            <div class="col-sm-6">
                                <label>Telefóno</label>
                                <input type="text" name="billing_phone" class="form-control">
                            </div>
                            <div class="col-sm-6">
                                <label>Ciudad</label>
                                <input type="text" name="billing_city" class="form-control">
                            </div>
                            <div class="col-sm-6">
                                <label>Estado</label>
                                <input type="text" name="billing_state" class="form-control">
                            </div>
                            <div class="col-sm-6">
                                <label>Calle de Dirección</label>
                                <input type="text" name="billing_address" class="form-control address mb-0">
                            </div>
                            <div class="col-sm-6">
                                <label>Código Postal</label>
                                <input type="text" name="billing_zip" class="form-control mb-0">
                            </div>
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary mt-4">Submit Property</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
    $(function() {
        var $form = $(".require-validation");
        $('form.require-validation').bind('submit', function(e) {
            var $form = $(".require-validation"),
                inputSelector = ['input[type=email]', 'input[type=password]',
                    'input[type=text]', 'input[type=file]',
                    'textarea'
                ].join(', '),
                $inputs = $form.find('.required').find(inputSelector),
                $errorMessage = $form.find('div.error'),
                valid = true;
            $errorMessage.addClass('hide');
            $('.has-error').removeClass('has-error');
            $inputs.each(function(i, el) {
                var $input = $(el);
                if ($input.val() === '') {
                    $input.parent().addClass('has-error');
                    $errorMessage.removeClass('hide');
                    e.preventDefault();
                }
            });
            if (!$form.data('cc-on-file')) {
                e.preventDefault();
                Stripe.setPublishableKey($form.data(
                    'pk_test_51L9rBoH3TO4CUc7Ttb4qbZCqMnKXO3Th8ovbUXTK3S4vk0dYvEJZUceam5zQPvaZpd3F0tsrP4cYb3KoZWzpxNUo00GXwPRZ3t'
                ));
                Stripe.createToken({
                    number: $('.card-number').val(),
                    cvc: $('.card-cvc').val(),
                    exp_month: $('.card-expiry-month').val(),
                    exp_year: $('.card-expiry-year').val()
                }, stripeResponseHandler);
            }
        });

        function stripeResponseHandler(status, response) {
            if (response.error) {
                $('.error')
                    .removeClass('hide')
                    .find('.alert')
                    .text(response.error.message);
            } else {
                /* token contains id, last4, and card type */
                var token = response['id'];
                $form.find('input[type=text]').empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                $form.get(0).submit();
            }
        }
    });
</script>
