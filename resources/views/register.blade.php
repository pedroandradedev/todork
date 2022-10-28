<x-layout>

  <x-slot:btn>
    <a href="{{route('login')}}" class="btn btn-primary">
      Já possui conta? Faça login
    </a>
  </x-slot:btn>

  <section class="form-task">
    <h1>Registrar-se</h1>

    @if ($errors->any())
      <div class="alert alert-error">
        @foreach ($errors->all() as $error)
          <div>{{$error}}</div>
        @endforeach
      </div>
    @endif

    <form method="post" action="{{route('user.register_action')}}">
      @csrf
      <x-form.text_input name="name" label="Seu nome" placeholder="Digite o seu nome" />
      <x-form.text_input name="email" type="email" label="Seu email" placeholder="Digite o seu email" />
      <x-form.text_input name="password" type="password" label="Sua senha" placeholder="Digite a sua senha" />
      <x-form.text_input name="password_confirmation" type="password" label="Confirme sua senha" placeholder="Digite novamente a sua senha" />
      <div class="actions">
        <x-form.button type="submit">Registrar-se</x-form.button>
      </div>
    </form>
  </section>
</x-layout>