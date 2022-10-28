<x-layout>

  <x-slot:btn>
    <a href="{{route('register')}}" class="btn btn-primary">
      Registre-se
    </a>
  </x-slot:btn>

  <section class="form-task">
    <h1>Login</h1>

    @if ($errors->any())
      <div class="alert alert-error">
        @foreach ($errors->all() as $error)
          <div>{{$error}}</div>
        @endforeach
      </div>
    @endif

    <form method="post" action="{{route('user.login_action')}}">
      @csrf
      <x-form.text_input name="email" type="email" label="Seu email" placeholder="Digite o seu email" />
      <x-form.text_input name="password" type="password" label="Sua senha" placeholder="Digite a sua senha" />
      <div class="actions">
        <x-form.button type="submit">Entrar</x-form.button>
      </div>
    </form>
  </section>
</x-layout>