<x-layout>

  <x-slot:btn>
    <a href="#" class="btn btn-primary">
      Criar Tarefa
    </a>
  <x-slot:btn>

  <section class="graph">
    <div class="graph_header">
      <h2>Progresso do Dia</h2>
      <div class="graph_header-line"></div>
      <div class="graph_header-date">
        Data
      </div>
    </div>
    <div class="graph_header-subtitle">
      Tarefas: <b>3/6</b>
    </div>

    <div class="graph-placeholder"></div>

    <div class="tasks_left_footer">
      <img src="/assets/images/icon-info.png" alt="">
      Restam 3 tarefas para serem realizadas
    </div>

  </section>
  <section class="list">
    <div class="list_header">
      <select name="" id="" class="list_header-select">
        <option value="#">Todas as tarefas</option>
      </select>
    </div>
    <div class="task_list">
      <div class="task">
        <div class="title">
          <input type="checkbox" name="" id="" />
          <div class="task_title">Título da tarefa</div>
        </div>
        <div class="priority">
          <div class="sphere"></div>
          <div>Título da tarefa</div>
        </div>
        <div class="actions">
          <a href="#">
            <img src="/assets/images/icon-edit.png" alt="">
          </a>
          <a href="#">
            <img src="/assets/images/icon-delete.png" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>
</x-layout>