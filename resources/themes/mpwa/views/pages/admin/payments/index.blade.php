<x-layout-dashboard title="{{ __('Payment Gateways') }}">
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">{{ __('Admin') }}</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ __('Payment Gateways') }}</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-header">
            <h5>{{ __('Payment Gateways') }}</h5>
        </div>
	</div>
        <div class="card-body">
            <form action="{{ route('admin.payments.update') }}" method="POST">
    @csrf
	@foreach ($gateways as $gateway)
    <div class="card">
        <div class="card-header">
            <h6>{{ ucfirst($gateway['name']) }}</h6>
        </div>
        <div class="card-body">
            <div class="row">
                @foreach ($gateway['config'] as $key => $option)
                    <div class="col-md-6">
                        <label for="{{$key}}" class="form-label mt-2" id="{{$key}}">{{str_replace('_', ' ', ucfirst($key))}}</label>
                        @if($key == 'status')
                            <select name="gateway[{{$gateway['name']}}][{{$key}}]" class="form-control">
                                <option value="disable">Disable</option>
                                <option value="enable" @if($option == 'enable') selected @endif>Enable</option>
                            </select>
                        @else
                            <input name="gateway[{{$gateway['name']}}][{{$key}}]" id="{{$key}}" class="form-control" value="{{$option}}" />
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
	@endforeach

    <button type="submit" class="btn btn-primary mt-3">{{ __('Save Changes') }}</button>
</form>
        </div>
    
</x-layout-dashboard>
