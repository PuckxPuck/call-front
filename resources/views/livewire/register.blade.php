<section>
    <div class="hero min-h-screen bg-base-200">
        <div class="hero-content flex-col justify-center">
          <div class="text-center flex flex-col items-center my-5">
            <img src="img/logo.png" class="" />
            <h1 class="text-5xl font-bold">Call Eater Admin Panel</h1>
            <h1 class="text-3xl font-bold">Register</h1>

          </div>
          <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
            <div class="card-body">
                <div class="form-control">
                    <label class="label">
                      <span class="label-text">Full Name</span>
                    </label>
                    <input wire:model.defer="fullName" type="text" placeholder="Fullname" class="input input-bordered" />
                    @error ('fullName') <span class="text-red-500">{{ $message }}</span> @enderror
                  </div>
              <div class="form-control">
                <label class="label">
                  <span class="label-text">Email</span>
                </label>
                <input wire:model.defer="email" type="text" placeholder="Email" class="input input-bordered" />
                @error ('email') <span class="text-red-500">{{ $message }}</span> @enderror
              </div>
              <div class="form-control">
                <label class="label">
                  <span class="label-text">Password</span>
                </label>
                <input wire:model.defer="password" type="password" placeholder="Password" class="input input-bordered" />
            </div>
            <div class="form-control">
                  <label class="label">
                      <span class="label-text">Confirm Password</span>
                    </label>
                  <input wire:model.defer="password_confirmation" type="password" placeholder="Confirm Password" class="input input-bordered" />
                    @error ('password_confirmation') <span class="text-red-500">{{ $message }}</span> @enderror
                <label class="label">
                    <div class="tooltip tooltip-right" data-tip="Avas">
                  <a href="{{route('login')}}"  class="label-text-alt link link-hover">Ebaintha account eh, login ve! </a>
                    </div>
                </label>
              </div>
              <div class="form-control mt-6">
                <button wire:click="register" class="btn btn-primary">Register</button>
              </div>
            </div>
          </div>
        </div>
      </div>
</section>