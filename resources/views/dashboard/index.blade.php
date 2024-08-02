<x-layouts.app>
    <div class="d-flex justify-content-center">
        <div class="col-lg-4 my-3 p-3 bg-body rounded-2 shadow-sm" style="background-color: rgba(0, 0, 0, 0.25) !important;">
            <form action="" method="POST">
                @csrf
                @if (session('status'))
                <p class="text-primary-emphasis">{{session('status')}}</p>
                @endif
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label slate-light">Create company</label>
                    <input type="text" class="form-control" name="company_name" id="company_name" placeholder="eg. Company name" autofocus>
                    @error('company_name')
                        <small class="text-danger text-xs">{{$message}}</small>
                    @enderror
                </div>
              <div class="mb-1">
                <small>
                    <span class="small slate-light">Ensure to write the name correctly.</span>
                    <a href="{{route('company.index')}}">Go to company</a>
                </small>
              </div>
              <button class="btn btn-light btn-sm slate-light" type="submit">Proceed</button>
            </form>
        </div>
    </div>
  </x-layouts.app>
