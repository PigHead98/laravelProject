<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    th, td {
        padding: 5px;
        text-align: left;
    }
</style>
<h2>RESERVATIONS</h2>
<table>
    <tr>
        <th>Infomation</th>
        <td>Values</td>
    </tr>
    <tr>
        <th>Name:</th>
        <td>{{$data['name']}}</td>
    </tr>
    <tr>
        <th>Email Address:</th>
        <td>{{$data['email']}}</td>
    </tr>
    <tr>
        <th>Phone:</th>
        <td>{{$data['phone']}}</td>
    </tr>
    <tr>
        <th>Location:</th>
        <td>{{$data['location']}}</td>
    </tr>
    <tr>
        <th>Event:</th>
        <td>{{$data['event']}}</td>
    </tr>
    <tr>
        <th>Date:</th>
        <td>{{$data['date']}}</td>
    </tr>
    <tr>
        <th>Arrival Time:</th>
        <td>{{$data['time']}}</td>
    </tr>
    <tr>
        <th>Pax:</th>
        <td>{{$data['pax']}}</td>
    </tr>
    <tr>
        <th>Special Request:</th>
        <td>{{$data['specialrequest']}}</td>
    </tr>
</table>
