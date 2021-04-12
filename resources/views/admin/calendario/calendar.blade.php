<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>URC | Calendario</title>
  <meta name="description" content="Help managing daily activities. Be organized.">
  <link rel="stylesheet" href="{{asset('css/Calendar.css')}}">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/LogoComp90.png')}}">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.4.0/main.min.css">
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.4.0/main.min.js"></script>
  <script src="{{asset('js/calendario.js')}}" defer></script>

</head>
<header>
    <nav>
        <a href="{{route('home')}}" class = "logo "><img src="{{asset('images/LogoComp80.png')}}" alt="Logo"></a>

        <a href="{{route('vehiculos.index')}}" class = "administrarv ">Administrar Vehiculos
            <img src="images/iconocar.png" width="16px" height="18px">
        </a>

        <a href="{{route('rentas.index')}}" class = "administrarv ">Rentas
            <img src="images/carnolmal.png" width="18px" height="16px">
        </a>

        <a href="#" class = "administrarv ">Calendario
            <img src="images/iconocalendar.png" width="15px" height="18px">
        </a>

        <a href="{{route('clientes.index')}}" class = "circulop"> <img src="{{asset('images/fotocliente.png')}}" alt="clientes" width="44px" height="44.44px"> </a>

        <div class="dropdown">
            <img src="{{asset('images/admin 1.png')}}" alt="A">
            <div class="dropdown-content">
                
                <a href="{{ route('logout') }}" 
                onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                 <img src="{{ asset('images/iconologout.png')}}" width="14px" height="14.44px"> Cerrar Sesión</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>

        </div>

    </nav>
</header>

<body>
  <h2>Calendario</h2>
  <div class="todo-grid-parent">

    <div>
      <div class="todo-input todo-block">
        <span>Evento: </span>
        <input type="text" placeholder="Ingresa un nuevo evento" style="
        font-family: 'Inter',sans-serif;">
        <span>Categoría: </span>
        <input type="text" placeholder="Seleccione una categoría" list="categoryList" style="
        font-family: 'Inter',sans-serif;">
        <datalist id="categoryList">
          <option value="Personal"></option>
          <option value="Reservas"></option>
        </datalist>
        <span>Día:</span>
        <input type="date" id="dateInput" style="
        font-family: 'Inter',sans-serif;">
        <span>Hora:</span>
        <input type="time" id="timeInput" style="
        font-family: 'Inter',sans-serif;">
        <span></span>
        <button id="addBtn" style="
        font-family: 'Inter',sans-serif;">Agregar</button>
        <span></span>
        <button id="sortBtn" style="
        font-family: 'Inter',sans-serif;">Ordenar por día</button>
        <span></span>
        <label ><input type="checkbox" id="shortlistBtn">Mostrar eventos pendientes primero</label>

      </div>

      <div class="todo-block todoTable-block">
        <div class="itemsPerPage">
          <span>Eventos por página</span>
          <select id="itemsPerPageSelectElem">
            <option>5</option>
            <option>10</option>
            <option>20</option>
          </select>
        </div>

        <table id="todoTable">
          <tr>
            <td></td>
            <td>Día</td>
            <td>Hora</td>
            <td>Evento</td>
            <td>
              <select id="categoryFilter" style="
              font-family: 'Inter',sans-serif;">
              </select>
            </td>
            <td></td>
          </tr>
        </table>

        <div class="pagination-pages">

        </div>
      </div>
    </div>

    <div class="todo-calendar  todo-block">
      <div id='calendar'></div>
    </div>

  </div> <!-- class="todo-grid-parent" -->

  <div class="todo-overlay" id="todo-overlay">
    <div class="todo-modal" id="todo-modal">
      <div class="todo-input todo-block">
        <span>Evento: </span>
        <input type="text" placeholder="Enter new to-do" id="todo-edit-todo" style="
        font-family: 'Inter',sans-serif;">

        <span>Categoría: </span>
        <input type="text" placeholder="Enter category" list="categoryList" id="todo-edit-category" style="
        font-family: 'Inter',sans-serif;">

        <datalist id="categoryList" style="
        font-family: 'Inter',sans-serif;">
          <option value="Personal"></option>
          <option value="Work"></option>
        </datalist>
        <span>Día:</span>
        <input type="date" id="todo-edit-date" style="
        font-family: 'Inter',sans-serif;">

        <span>Hora:</span>
        <input type="time" id="todo-edit-time"style="
          font-family: 'Inter',sans-serif;">
        <span></span>
        <button id="changeBtn" style="
        font-family: 'Inter',sans-serif;">Guardar cambios</button>
      </div>
    </div>
    <div class="todo-modal-close-btn" id="todo-modal-close-btn">X</div>
  </div>

</body>

</html>
