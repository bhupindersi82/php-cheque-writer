<!DOCTYPE html>
<html>
<head>
    <title>Cheque Writer</title>
</head>
<body>
    <h1>Cheque Writer</h1>
        <p>Write your cheques within no time. :)</p>
        <div style="border:5px solid; width:600px; height:200px; padding:5px;">
            <h2>ICICI BANK, Chandigarh Branch, 140308</h2>
            <table cellspacing="6">
                <tr>
                    <td>
                        Name: <b>Mr. John Doe</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        Amount in words: <b>{{$words}}</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        Rs. <input type="text" disabled value="{{ $amount }}">
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>
