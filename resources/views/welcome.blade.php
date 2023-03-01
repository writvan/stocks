<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<style>
		.container {
			display: flex;
			flex-wrap: wrap;
			justify-content: left ;
			align-items: left;
			height: 100vh;
		}
		.box {
			width: 200px;
			height: 200px;
			margin: 20px;
			text-align: left;
			line-height: 200px;
			background-color: #ddd;
			color: #333;
			font-size: 24px;
			text-decoration: none;
			display: block;
		}
		table {
			border-collapse: collapse;
            background-color: lightgrey;
            border-radius: 20px;
		}
		td {
			width: 200px;
			height: 100px;
			text-align: center;
            
		}
        th {
            background-color: rgb(51, 153, 255); /* Set the background color for the header row */
        }
	</style>
</head>
<body>
	<div class="container" >
    <table border="1" round="1" align="left">
  <tr>
    <th>Serial No.</th>
    <th>Name</th>
    <th>Value</th>
  </tr>
  <tr>
    <td>1</td>
    <td><a href="microsoft.php">Microsoft</a></td>
    <td>Value 1</td>
  </tr>
  <tr>
    <td>2</td>
    <td><a href="apple.php">Apple</a></td>
    <td>Value 2</td>
  </tr>
  <tr>
    <td>3</td>
    <td><a href="cocacola.php">coca-cola</a></td>
    <td>Value 3</td>
  </tr>
  <tr>
    <td>4</td>
    <td><a href="google.php">google</a></td>
    <td>Value 4</td>
  </tr>
  <tr>
    <td>5</td>
    <td><a href="amazon.php">amazon</a></td>
    <td>Value 5</td>
  </tr>
</table>

	</div>
</body>
</html>
