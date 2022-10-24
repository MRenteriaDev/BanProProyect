@extends('dashboard-cliente')

@section('cliente-registrado-dashboard')
<section class="payment-method notfound col-xs-12">
    <div class="row">
        <div class="col-md-12 col-lg-6">
            <div class="tr-single-box">
                <div class="tr-single-body">
                    <div class="tr-single-header">
                        <h4><i class="far fa-address-card pr-2"></i>Información de Facturación</h4>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <label>Nombre</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-6">
                            <label>Email</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="col-sm-6">
                            <label>Celular</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-6">
                            <label>Ciudad</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-6">
                            <label>Estado</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-6">
                            <label>Pais</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-6">
                            <label>Dirección</label>
                            <input type="text" class="form-control address mb-0">
                        </div>
                        <div class="col-sm-6">
                            <label>Codigo Postal</label>
                            <input type="text" class="form-control mb-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-6">
            <div class="tr-single-box">
                <div class="tr-single-body">
                    <div class="tr-single-header">
                        <h4><i class="far fa-credit-card pr-2"></i>Metodo de Pago</h4>
                    </div>
                    {{-- <!-- Paypal Option -->
                    <div class="payment-card">
                        <header class="payment-card-header cursor-pointer" data-toggle="collapse" data-target="#paypal"
                            aria-expanded="true">
                            <div class="payment-card-title flexbox">
                                <h4>PayPal</h4>
                            </div>
                            <div class="pull-right">
                                <img src="images/paypal.png" class="img-responsive" alt="">
                            </div>
                        </header>
                        <div class="collapse" id="paypal" role="tablist" aria-expanded="false">
                            <div class="payment-card-body">
                                <div class="row mrg-bot-20">
                                    <div class="col-sm-6">
                                        <span class="custom-checkbox d-block font-12 mb-2">
                                            <input type="checkbox" id="promo1">
                                            <label for="promo1"></label>
                                            Have a promo code?
                                        </span>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-sm-6 padd-top-10 text-right">
                                        <label>Total Order</label>
                                        <h2 class="mrg-0"><span class="theme-cl">$</span>950</h2>
                                    </div>
                                    <div class="col-sm-12 bt-1 padd-top-15 pt-3">
                                        <span class="custom-checkbox d-block font-12 mb-3">
                                            <input type="checkbox" id="privacy">
                                            <label for="privacy"></label>
                                            By ordering you are agreeing to our <a href="#"
                                                class="theme-cl">Privacy policy</a>.
                                        </span>
                                        <button type="submit" class="btn btn-m btn-success">Checkout</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- Debit card option -->
                    <div class="payment-card mb-0">
                        <header class="payment-card-header cursor-pointer" data-toggle="collapse"
                            data-target="#debit-credit" aria-expanded="true">
                            <div class="payment-card-title flexbox">
                                <h4>Tarjeta de credito / debito</h4>
                            </div>
                            <div class="pull-right">
                                <img src="images/credit.png" class="img-responsive" alt="">
                            </div>
                        </header>
                        <div class="collapse" id="debit-credit" role="tablist" aria-expanded="false">
                            <form role="form" method="POST" action="{{ route('stripePost') }}"
                                class="payment-card-body" data-cc-on-file="false"
                                data-srtipe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment_form">
                                @csrf
                                <div class="row mrg-bot-20">
                                    <div class="col-sm-6">
                                        <label>Titular de tarjeta</label>
                                        <input type="text" class="form-control" placeholder="Chris Seail">
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Numero de tarjeta</label>
                                        <input type="number" class="form-control card-number">
                                    </div>
                                </div>
                                <div class="row mrg-bot-20">
                                    <div class="col-sm-4 col-md-4">
                                        <label>MM</label>
                                        <input type="number" class="form-control card-expiry-month" placeholder="09">
                                    </div>
                                    <div class="col-sm-4 col-md-4">
                                        <label>YYYY</label>
                                        <input type="number" class="form-control card-expiry-year" placeholder="2022">
                                    </div>
                                    <div class="col-sm-4 col-md-4">
                                        <label>CCV</label>
                                        <input type="number" class="form-control card-cvc" placeholder="258">
                                    </div>
                                </div>
                                <div class="row mrg-bot-20">
                                    <div class="col-sm-7">

                                    </div>
                                    <div class="col-sm-5 padd-top-10 text-right">
                                        <label>Total</label>
                                        <h2 class="mrg-0"><span class="theme-cl">$</span>10</h2>
                                    </div>
                                    <div class="col-sm-12 bt-1 padd-top-15 pt-3">

                                        <button type="submit" class="btn btn-m btn-success">Checkout</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
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
