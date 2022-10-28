<x-layout>

  <x-slot:btn>
    <a href="{{route('home')}}" class="btn btn-primary">
      Voltar
    </a>
  </x-slot:btn>

  <section class="form-task">
    <h1>Criar Tarefa</h1>
    <form method="post" action="{{route('task.create_action')}}">
      @csrf
      <x-form.text_input name="title" label="Título da tarefa" placeholder="Digite o título da tarefa" />
      <x-form.text_input name="due_date" label="Data de realização" type="datetime-local" />
      <x-form.select_input name="category_id" label="Categoria da tarefa">
        @foreach ($categories as $category)
          <option value="{{$category->id}}">{{$category->title}}</option>
        @endforeach
      </x-form.select_input>
      <x-form.textarea_input name="description" label="Descrição da tarefa" placeholder="Digite a descrição da tarefa" rows="5" />
      <div class="actions">
        <x-form.button type="reset">Resetar</x-form.button>
        <x-form.button type="submit">Criar tarefa</x-form.button>
      </div>
    </form>
  </section>
</x-layout>