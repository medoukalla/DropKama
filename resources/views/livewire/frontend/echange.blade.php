<section class="acheter-processing bg-not-white">
  <div class="container @if ( $echange_status == true ) d-none @endif ">
    <div class="row">
      <div class="col-12 col-md-6">
        <div class="kamas-settings w-100">
          <div class="selector">
            <label for="" class="mt-0">Serveur à échanger <span>*</span></label>
            <div id="selectField" onclick="$('ul.fromList').toggle('slow'); $('.input-arrow-servers-from').toggleClass('active')">
              <div class="d-flex align-items-center gap-3">
                  <img src="{{ asset('storage//'.$server_from->image ) }}" alt="" class="dofus-egg" />
                  <p id="selectText">{{ $server_from->name }} - ( {{ $server_from->map->name }} )</p>
              </div>
              <img src="{{ asset('frontend/images/svg/input-arrow.svg') }}" alt="Arrow" class="input-arrow input-arrow-servers-from" />
            </div>
            <ul id="list" class="mt-3 fromList">
                @foreach ( $servers as $the_server )
                    <li class="options @if ( $the_server->id == $server_from->id || $the_server->id == $server_to->id ) d-none @endif" wire:click="change_server_from({{ $the_server->id }})">
                        <img src="{{ asset('storage//'.$the_server->image )  }}" alt="" class="dofus-egg" />
                        <p>{{ $the_server->name }} - ( {{ $the_server->map->name}} )</p>
                    </li>
                @endforeach
            </ul>
          </div>
          <div class="input">
              <label for="">Quantité à donner <span>*</span></label>
              <div class="d-flex align-items-center justify-content-between">
                <input wire:model="quantite_a_donner" wire:change="calculate()" type="number" min="0" step="0.1" id="normalInput" />
              </div>
              @error('quantite_a_donner')                        
                  <div class="alert alert-danger mt-2 rounded-4">{{ $message }}</div>
              @enderror
          </div>
          <div class="input mt-3">
              <label for="">Nom de personnage sur ({{ $server_from->name }}) <span>*</span></label>
              <div class="d-flex align-items-center justify-content-between">
                <input wire:model="nom_en_jeu" type="text" id="normalInput" />
              </div>
              @error('nom_en_jeu')                        
                  <div class="alert alert-danger mt-2 rounded-4">{{ $message }}</div>
              @enderror
          </div>
          <div class="selector mt-3">
              <label for="" class="mt-0">Serveur souhaité <span>*</span></label>
              <div id="selectField" onclick="$('ul.toList').toggle('slow'); $('.input-arrow-servers-to').toggleClass('active')" >
                  <div class="d-flex align-items-center gap-3">
                      <img src="{{ asset('storage//'.$server_to->image ) }}" alt="" class="dofus-egg" />
                      <p id="selectText">{{ $server_to->name }} - ( {{ $server_to->map->name }} )</p>
                  </div>
                  <img src="{{ asset('frontend/images/svg/input-arrow.svg') }}" alt="Arrow" class="input-arrow input-arrow-servers-to" />
              </div>
              <ul id="list" class="mt-3 toList">
                  @foreach ( $servers as $the_server )
                      <li class="options @if ( $the_server->id == $server_to->id || $the_server->id == $server_from->id ) d-none @endif" wire:click="change_server_to({{ $the_server->id }})">
                          <img src="{{ asset('storage//'.$the_server->image )  }}" alt="" class="dofus-egg" />
                          <p>{{ $the_server->name }} - ( {{ $the_server->map->name}} )</p>
                      </li>
                  @endforeach
              </ul>
          </div>
          <div class="input mt-3">
              <label for="">Nom de personnage sur ({{ $server_to->name }}) <span>*</span></label>
              <div class="d-flex align-items-center justify-content-between">
                <input wire:model="nom_en_jeu_deuxieme" type="text" id="normalInput" />
              </div>
              @error('nom_en_jeu_deuxieme')                        
                  <div class="alert alert-danger mt-2 rounded-4">{{ $message }}</div>
              @enderror
          </div>
          <div class="input mt-3">
              <label for="">Quantité à recevoir(Million) <span>*</span></label>
              <div class="d-flex align-items-center justify-content-between">
                  <input wire:model="quantite_a_recevoir" type="text" id="normalInput" disabled />
              </div>
          </div>
          <hr />
          
          @auth
              <div class="main-btn mt-3 py-4" wire:click="save_echange()">Échangez la demande</div>
          @endauth
          @guest
            <div class="alert alert-warning mt-2">
                <b>
                    Veuillez vous <a href="{{ route('login') }}">connecter</a> ou <a href="{{ route('register') }}">créer un compte</a> pour terminer cet échange immédiatement!
                </b>
            </div>
          @endguest

        </div>
      </div>
      <div class="col-12 col-md-6">Soon</div>
    </div>
  </div>

  <div class="container @if ( $echange_status == false ) d-none @endif">
      <div class="row">
          <div class="col-12 col-md-8 offset-md-2 ">
              <div class="kamas-settings w-100 sticky-top">
                  
                  <h3>Message echange submited shows here</h3>


                  <div wire:click="confirm_echange()" class="main-btn bg-success mt-3 py-4" style="cursor: pointer">Confirm</div>


              </div>
          </div>
      </div>
  </div>
</section>