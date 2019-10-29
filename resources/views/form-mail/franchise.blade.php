
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
<h2>CONTACT US</h2>
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
        <th>Subject:</th>
        <td>{{$data['subject']}}</td>
    </tr>
    <tr>
        <th>Message:</th>
        <td>{{$data['message']}}</td>
    </tr>
</table>