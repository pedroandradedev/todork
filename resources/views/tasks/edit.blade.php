<x-layout>

  <x-slot:btn>
    <a href="{{route('home')}}" class="btn btn-primary">
      Voltar
    </a>
  </x-slot:btn>

  <section class="form-task">
    <h1>Editar Tarefa</h1>
    <form method="post" action="{{route('task.edit_action')}}">
      @csrf
      <input type="hidden" name="id" value="{{$task->id}}">
      <x-form.text_input name="title" label="Título da tarefa" placeholder="Digite o título da tarefa" value="{{$task->title}}" />
      <x-form.text_input name="due_date" label="Data de realização" type="datetime-local" value="{{$task->due_date}}" />
      <x-form.select_input name="category_id" label="Categoria da tarefa">
        @foreach ($categories as $category)
          <option value="{{$category->id}}"
            @if ($category->id == $task->category_id)
              selected
            @endif
          >{{$category->title}}</option>
        @endforeach
      </x-form.select_input>
      <x-form.textarea_input name="description" label="Descrição da tarefa" placeholder="Digite a descrição da tarefa" value="{{$task->description}}" />
      <x-form.checkbox_input name="is_done" label="Tarefa concluída" checked="{{$task->is_done}}" />
      <div class="actions">
        <x-form.button type="reset">Resetar</x-form.button>
        <x-form.button type="submit">Atualizar tarefa</x-form.button>
      </div>
    </form>
  </section>
</x-layout>