<style>
 

body {
	font-size: 1.3em;
}

table {
	border-collapse: collapse;
	margin: 1.2em auto;
	width: 90%;
	word-wrap: break-word;
}

thead {
	background-color: #1560bd;
	color: #ffffff;
	text-align: left;
}

td,
th {
	text-align: left;
	padding-left: 0.2em;
	overflow: auto;
}

td {
	padding-bottom: 0.5em;
}

main h1 {
	text-align: center;
}

@media only screen and (max-width: 760px), (max-device-width: 1024px) {
	/* Force table to not be like tables anymore */
	thead,
	tbody,
	.table,
	.table-head,
	.table-data,
	.table-row {
		display: block;
	}

	/* Hide table headers (but not display: none;), for accesibility */
	thead .table-row {
		position: absolute;
		top: -9999px;
		left: -9999px;
	}

	.table-row {
		border: 1px solid #ccc;
		padding-bottom: 1em;
	}

	/* Behave like a row */
	.table-data {
		border: none;
		border-bottom: 2px solid #f9f9fa;
		position: relative;
		padding: 0.4em;
		padding-left: 50%;
		margin-bottom: 0.5em;
	}

	/* Now like a table header */
	.table-data:before {
		position: absolute;
		top: 6px;
		left: 6px;
		width: 45%;
		padding-right: 10px;
		white-space: nowrap;
	}

	/**
	 * Label the message and comments table using CSS
	 * generated content. The first td element is the
	 * 'select_all_checkbox' so we set its content to ''
	 */
	.comments td:nth-of-type(1):before {
		content: "";
	}
	.comments td:nth-of-type(2):before {
		content: "Date";
	}
	.comments td:nth-of-type(3):before {
		content: "Approved";
	}
	.comments td:nth-of-type(4):before {
		content: "Post Title";
	}
	.comments td:nth-of-type(5):before {
		content: "Name";
	}
	.comments td:nth-of-type(6):before {
		content: "Email";
	}
	.comments td:nth-of-type(7) {
		border: none;
	}

	/**
	 * We give the link to read message and
	 * manage comment some visual enhancements
	 */
	.comments td:nth-of-type(7),
	.messages td:nth-of-type(6) {
		padding: 8px 10px;
		text-align: center;
	}
	.comments td:nth-of-type(7) a,
	.messages td:nth-of-type(6) a {
		display: block;
		padding: 8px 10px;
		background-color: #dddddd;
	}

	/**
	 * Remove the table data which contains the
	 * checkboxes.
	 */
	.table-row > td {
		border: none;
	}

	.table-row > td > * {
		display: none;
	}

}

.submit-input {
	background-color: #1560bd;
	border: 0;
	color: #fff;
	font-family: "Trebuchet Ms", serif;
	margin: 0 auto;
	padding: 0.5em;
	width: 30%;
	display: block;
}
.submit-input:hover {
	cursor: pointer;
	box-shadow: 0 2px 3px #1560bd;
	font-weight: bold;
}

.highlighted {
	background-color: #bbbbbb;
}

.visuallyhidden { 
  position: absolute; 
  overflow: hidden; 
  clip: rect(0, 0, 0, 0); 
  height: 1px;
  width: 1px; 
  margin: -1px;
  padding: 0;
  border: 0; 
}

</style>

<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, shrink-to-fit=no"
		/>
		<title>Select all checkboxes</title>
		<link rel="stylesheet" href="selectallcheckboxes.css" />
	</head>
	<body>
		<main>
			<h1>A table with a "Select All" checkbox</h1>

			<!-- <form action="" method="post"> -->
			<table class="table comments">
				<thead>
					<tr class="table-row">
						<th class="table-head">
							<label
								for="select_all_checkboxes"
								class="visuallyhidden"
								>Select all checkboxes</label
							>
							<input type="checkbox" id="select_all_checkboxes" />
						</th>
						<th class="table-head">Date</th>
						<th class="table-head">Approved</th>
						<th class="table-head">Post Title</th>
						<th class="table-head">Name</th>
						<th class="table-head">Email</th>
						<th class="table-head">Read Comment</th>
					</tr>
				</thead>

				<tbody>
					<tr class="table-row">
						<td class="table-data">
							<label for="ferranMessage" class="visuallyhidden"
								>Select message</label
							>
							<input
								id="ferranMessage"
								type="checkbox"
								class="delete_checkbox"
							/>
						</td>
						<td class="table-data">2021-01-09 11:22:11</td>
						<td class="table-data">No</td>
						<td class="table-data">This is a test post</td>
						<td class="table-data">Ferran</td>
						<td class="table-data">ferrantorres@yahoo.com</td>
						<td class="table-data">
							<a>View Comment</a>
						</td>
					</tr>

					<tr class="table-row">
						<td class="table-data">
							<label for="marquezMessage" class="visuallyhidden"
								>Select message</label
							>
							<input
								id="marquezMessage"
								type="checkbox"
								class="delete_checkbox"
							/>
						</td>
						<td class="table-data">2021-01-09 11:17:57</td>
						<td class="table-data">No</td>
						<td class="table-data">
							Introduction to CSS Block Formatting Context
						</td>
						<td class="table-data">Marquez</td>
						<td class="table-data">marquez@gmail.com</td>
						<td class="table-data">
							<a>View Comment</a>
						</td>
					</tr>

					<tr class="table-row">
						<td class="table-data">
							<label for="johnstonMessage" class="visuallyhidden"
								>Select message</label
							>
							<input
								id="johnstonMessage"
								type="checkbox"
								class="delete_checkbox"
							/>
						</td>
						<td class="table-data">2021-01-09 11:17:13</td>
						<td class="table-data">No</td>
						<td class="table-data">
							Introduction to CSS Block Formatting Context
						</td>
						<td class="table-data">Johnston</td>
						<td class="table-data">littlejohn@yaho.com</td>
						<td class="table-data">
							<a>View Comment</a>
						</td>
					</tr>
				</tbody>
			</table>
			<input
				id="multiple_deletion"
				type="submit"
				class="submit-input"
				value="Delete"
			/>
			<!-- </form> -->
		</main>
		<script src="selectallcheckboxes.js"></script>
	</body>
</html>
Skip to content
Product
Solutions
Open Source
Pricing
Search
Sign in
Sign up
ziizium
/
SelectAllCheckbox
Public
Code
Issues
Pull requests
Actions
Projects
Security
Insights
SelectAllCheckbox/index.html
@ziizium
ziizium Add files via upload
Latest commit 3001e27 on Jan 15, 2021
 History
 1 contributor
116 lines (112 sloc)  3.12 KB
 

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, shrink-to-fit=no"
		/>
		<title>Select all checkboxes</title>
		<link rel="stylesheet" href="selectallcheckboxes.css" />
	</head>
	<body>
		<main>
			<h1>A table with a "Select All" checkbox</h1>

			<!-- <form action="" method="post"> -->
			<table class="table comments">
				<thead>
					<tr class="table-row">
						<th class="table-head">
							<label
								for="select_all_checkboxes"
								class="visuallyhidden"
								>Select all checkboxes</label
							>
							<input type="checkbox" id="select_all_checkboxes" />
						</th>
						<th class="table-head">Date</th>
						<th class="table-head">Approved</th>
						<th class="table-head">Post Title</th>
						<th class="table-head">Name</th>
						<th class="table-head">Email</th>
						<th class="table-head">Read Comment</th>
					</tr>
				</thead>

				<tbody>
					<tr class="table-row">
						<td class="table-data">
							<label for="ferranMessage" class="visuallyhidden"
								>Select message</label
							>
							<input
								id="ferranMessage"
								type="checkbox"
								class="delete_checkbox"
							/>
						</td>
						<td class="table-data">2021-01-09 11:22:11</td>
						<td class="table-data">No</td>
						<td class="table-data">This is a test post</td>
						<td class="table-data">Ferran</td>
						<td class="table-data">ferrantorres@yahoo.com</td>
						<td class="table-data">
							<a>View Comment</a>
						</td>
					</tr>

					<tr class="table-row">
						<td class="table-data">
							<label for="marquezMessage" class="visuallyhidden"
								>Select message</label
							>
							<input
								id="marquezMessage"
								type="checkbox"
								class="delete_checkbox"
							/>
						</td>
						<td class="table-data">2021-01-09 11:17:57</td>
						<td class="table-data">No</td>
						<td class="table-data">
							Introduction to CSS Block Formatting Context
						</td>
						<td class="table-data">Marquez</td>
						<td class="table-data">marquez@gmail.com</td>
						<td class="table-data">
							<a>View Comment</a>
						</td>
					</tr>

					<tr class="table-row">
						<td class="table-data">
							<label for="johnstonMessage" class="visuallyhidden"
								>Select message</label
							>
							<input
								id="johnstonMessage"
								type="checkbox"
								class="delete_checkbox"
							/>
						</td>
						<td class="table-data">2021-01-09 11:17:13</td>
						<td class="table-data">No</td>
						<td class="table-data">
							Introduction to CSS Block Formatting Context
						</td>
						<td class="table-data">Johnston</td>
						<td class="table-data">littlejohn@yaho.com</td>
						<td class="table-data">
							<a>View Comment</a>
						</td>
					</tr>
				</tbody>
			</table>
			<input
				id="multiple_deletion"
				type="submit"
				class="submit-input"
				value="Delete"
			/>
			<!-- </form> -->
		</main>
		<script src="selectallcheckboxes.js"></script>
	</body>
</html>
