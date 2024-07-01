<section class="section-py first-section-pt">
    <div class="container">
      <h2 class="text-center mb-5 d-flex justify-content-between">
        Pricing Plans & options
        <a href="{{ route('voyager.packs.create') }}" class="btn btn-primary mb-2 text-nowrap add-new-role waves-effect waves-light">Create new pack</a>
    </h2>

      <div class="row mx-0 gy-3">
        <!-- display packs -->
        @foreach ( $packs as $pack )
            
            <div class="col-lg mb-md-0 mb-4">
                <div class="card border rounded shadow-none">
                    <div class="card-body">
                        <a href="{{ route('voyager.packs.edit', $pack->id) }}">
                            <i class="fas fa-pen"></i>
                        </a>
                        <div class="my-3 pt-2 text-center">
                            <img src="{{ asset('storage/'.$pack->icon) }}" alt="Basic Image" height="140">
                        </div>
                    <h3 class="card-title text-center text-capitalize mb-1">{{ $pack->name }}</h3>
                    <p class="text-center">A simple start for everyone</p>
                    <div class="text-center">
                        <div class="d-flex justify-content-center">
                        <sup class="h6 pricing-currency mt-3 mb-0 me-1 text-primary">$</sup>
                        <h1 class="display-4 mb-0 text-primary">{{ $pack->price }}</h1>
                        <sub class="h6 pricing-duration mt-auto mb-2 text-muted fw-normal">/month</sub>
                        </div>
                        <small class="price-yearly price-yearly-toggle text-muted">$ {{ $pack->price_year }} / year</small>
                    </div>
        
                    <ul class="ps-0 my-4 pt-2 circle-bullets">
                        @foreach ( $pack->options as $option )                    
                            <li class="mb-2 d-flex align-items-center"><i class="ti ti-point ti-lg"></i>
                                {{ $option->title}}
                            </li>
                        @endforeach
                    </ul>
                    </div>
                </div>
            </div>
        @endforeach
  
      </div>

      <div class="row mx-0 gy-3 mt-3">
            <div class="col-12">
                Add new option  @error('option') <span class="text-danger px-4">( {{ $message}} )</span> @enderror
                @if ( $status == 'success' )
                    <span class="text-success px-4">{{ $status_message }} </span>
                @endif
            </div>
            <div class="col">
                <div class="row">
                    <div class="col-10">
                        <input wire:model="option" type="text" name="option" class="form-control" placeholder="Option title">
                    </div>
                    <div class="col-2">
                        <button wire:click="save_option()" type="button" class="btn btn-primary mb-2 text-nowrap add-new-role waves-effect waves-light">Save option</button>
                    </div>
                </div>
            </div>
            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                @foreach ( $packs as $key => $pack )

                    <input wire:model="optionPack" type="checkbox" value="{{ $pack->id }}" class="btn-check" id="packCheck{{$key}}" autocomplete="off">
                    <label class="btn btn-outline-primary" for="packCheck{{$key}}">{{ $pack->name }}</label>
                
                @endforeach
            </div>
      </div>
    </div>
</section>