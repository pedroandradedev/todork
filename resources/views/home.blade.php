<x-layout>

  <x-slot:btn>
    <a href="{{route('task.create')}}" class="btn btn-primary">
      Criar Tarefa
    </a>
    <a href="{{route('logout')}}" class="btn btn-primary">
      Sair
    </a>
  </x-slot:btn>

  <section class="graph">
    <div class="header">
      <h2>Progresso do Dia</h2>
      <div class="line"></div>
      <div class="date">
        <a href="#">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3 h-3">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
          </svg>
        </a>
        <span>Data</span>
        <a href="#">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3 h-3">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
          </svg>
        </a>
      </div>
    </div>
    <div class="subtitle">
      Tarefas: <b>3/6</b>
    </div>

    <div class="chart"></div>

    <div class="tasks-left">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
      </svg>
      Restam 3 tarefas para serem realizadas
    </div>

  </section>
  <section class="list">
    <div class="header">
      <select name="" id="" class="select">
        <option value="#">Todas as tarefas</option>
      </select>
    </div>
    <div class="tasks">
      @foreach ($tasks as $task)
        <x-task :data=$task />
      @endforeach
    </div>
  </section>
</x-layout>