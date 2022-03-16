

{{--@section('content')
  <div >
    <div >
      <div >
        @if(session()->has('message'))
          <p >
            {{ session('message') }}
          </p>
        @endif
        <div >
          <div >
            <img src="{{ asset('images/paypal.png') }}" >
          </div>
          <div >
            <img src="{{ asset('images/laravel.png') }}" >
          </div>
        </div>--}}
        <p><strong>Order Overview !</strong></p>
        <hr>
        <p>Item : Yearly Subscription cost !</p>
        <p>Amount : ${{ $service->amount }}</p>
        <hr>
      {{--</div>
      <div >--}}
        <form method="POST" action="{{ route('checkout.payment.paypal', ['id' => encrypt($transaction_id)]) }}">
          {{ csrf_field() }}
          <button >
            <i aria-hidden="true"></i> Pay with PayPal
          </button>
        </form>
      {{--</div>
    </div>
  </div>
@stop--}}