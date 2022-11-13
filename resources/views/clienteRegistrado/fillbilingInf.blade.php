@extends('dashboard-cliente')

@section('cliente-registrado-dashboard')
<section class="payment-method notfound col-xs-12">
    <div class="row">

        <div class="col-md-12 col-lg-12">
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
                    <form action="/payments/session" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <button type="submit" class="btn btn-m btn-success" id="checkout-live-button">Checkout</button>
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
                    'pk_test_51M26MaFBEExGBCEP2UjAjo3cJlMgYOLkbhcLNWBzltABsGYAplOO8f4b6M0K5tMf5IArIjEE3H7hgc7MvQnr4L2z00KECfhwUv'
                ));
                Stripe.createToken({
                    number: $('.card-number').val(),

                    cvc: $('.card-cvc').val(),
                    exp_month: $('.card-expiry-month').val(),
                    exp_year: $('.card-expiry-year').val()
                    console.log(number);
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
