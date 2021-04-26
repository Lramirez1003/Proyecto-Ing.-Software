Hola {{ $name }}!,<br><br>

Rentaste un <b>{{$rent}}</b>.<br><br>

El precio total es <b> {{$prec}}</b>, y tu codigo de la renta es <b>{{$codigoderenta}}</b> <br><br>

Con fecha de salida <b>{{\Carbon\Carbon::parse($fechasalida)->format('d-m-Y')}} </b>, hasta el <b>{{\Carbon\Carbon::parse($fechaentrega)->format('d-m-Y')}}</b><br><br>

Gracias por tu renta, y si tienes alguna pregunta, no dudes en llamarnos al número: 809-724-6519.</div><br><br>

Victor Ureña