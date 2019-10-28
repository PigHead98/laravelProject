<h2>RESERVATIONS</h2>
<table>
    <thead>
    <tr>
        <th >Name </th>
        <th >Email Address</th>
        <th >Phone </th>
        <th >Location </th>
        <th >Event </th>
        <th >Date  </th>
        <th >Arrival Time  </th>
        <th >Pax </th>
        <th >Special Request </th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th>{{$data['name']}}</th>
        <td>{{$data['email']}}</td>
        <td>{{$data['phone']}}</td>
        <td>{{$data['location']}}</td>
        <td>{{$data['event']}}</td>
        <td>{{$data['date']}}</td>
        <td>{{$data['time']}}</td>
        <td>{{$data['pax']}}</td>
        <td>{{$data['specialrequest']}}</td>
    </tr>
    </tbody>
</table>