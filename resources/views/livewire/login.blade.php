<section>
    <div class="hero min-h-screen bg-base-200">
        <div class="hero-content flex-col justify-center">
          <div class="text-center flex flex-col items-center my-5">
            <img src="img/logo.png" class="" />
            <h1 class="text-5xl font-bold">Call Eater Admin Panel</h1>
          </div>
          <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
            <div class="card-body">
              <div class="form-control">
                <label class="label">
                  <span class="label-text">Email</span>
                </label>
                <input wire:model.defer="email" type="text" placeholder="email" class="input input-bordered" />
              </div>
              <div class="form-control">
                <label class="label">
                  <span class="label-text">Password</span>
                </label>
                <input wire:model.defer="password" type="password" placeholder="password" class="input input-bordered" />
                <label class="label">
                    <div class="tooltip tooltip-right" data-tip="Ask Rappu">
                  <a href="#" class="label-text-alt link link-hover">Forgot password?</a>
                    </div>
                </label>
              </div>
              <div class="form-control mt-6">
                <button wire:click="login" class="btn btn-primary">Login</button>
              </div>
            </div>
          </div>
        </div>
      </div>
</section>