<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>color test</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="homepage.php">Logo</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="faq.php">FAQ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>
<div class="jumbotron">
<h1 class="display-4">Color Test</h1>
<hr>
</div>
<form method="POST" action="var.php">


<br>
<u><h2 style="margin:3px;">Instructions:</h2></u><br>
<p style="margin:5px;">Compare all 4 boxes in each row.
Do not analyze each word; just get a sense of each box in a specific row.
Score each of the four boxes in each row from most to least as it describes you.
Be true to yourself. There is no bad or good color, Each color is unique and has its own pros and cons.</p>
<br>
<hr>

<!-- SECTION 1 -->
<h3 style="text-align:center;">Row 1</h3>
<br>
<table class="table">
  <thead>
    <tr>

      <th scope="col">#</th>
      <th scope="col">Active <br>Variety <br>Sports <br>Opportunities <br>Spontaneous <br>Flexible </th>
      <th scope="col">Organized  <br>Planned <br>Neat <br>Parental <br>Traditional <br>Responsible </th>
      <th scope="col">Warm <br>Helpful <br>Friends <br>Authentic <br>Harmonious <br>Compassionate </th>
      <th scope="col">Learning <br>Science <br>Quiet <br>Versatile <br>Inventive <br>Competent </th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Least</th>
      <td><input type="radio" name= "a" value=1 required="required"></td>
      <td><input type="radio" name= "a" value=1></td>
      <td><input type="radio" name= "a" value=1></td>
      <td><input type="radio" name= "a" value=1></td>
    </tr>
    <tr>
      <th scope="row">Somewhat</th>
      <td><input type="radio" name= "b" value=2 required="required"></td>
      <td><input type="radio" name= "b" value=2></td>
      <td><input type="radio" name= "b" value=2></td>
      <td><input type="radio" name= "b" value=2></td>
    </tr>
    <tr>
      <th scope="row">A lot</th>
      <td><input type="radio" name= "c" value=3 required="required"></td>
      <td><input type="radio" name= "c" value=3></td>
      <td><input type="radio" name= "c" value=3></td>
      <td><input type="radio" name= "c" value=3></td>
    </tr>
    <tr>
      <th scope="row">Most</th>
      <td><input type="radio" name= "d" value=4 required="required"></td>
      <td><input type="radio" name= "d" value=4></td>
      <td><input type="radio" name= "d" value=4></td>
      <td><input type="radio" name= "d" value=4></td>
    </tr>
  </tbody>
</table>
<hr>

<!-- SECTION 2 -->
<h3 style="text-align:center;">Row 2</h3>
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Curious  <br>Ideas <br>Questions <br>Conceptual <br>Knowledge <br>Problem Solver </th>
      <th scope="col">Caring <br>People Oriented <br>Feelings <br>Unique <br>Empathetic <br>Communicative </th>
      <th scope="col">Orderly  <br>On-time <br>Honest <br>Stable <br>Sensible <br>Dependable  </th>
      <th scope="col">Action  <br>Challenges <br>Competitive <br>Impetuous <br>Impactful  </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Least</th>
      <td><input type="radio" name= "e" value=1 required="required"></td>
      <td><input type="radio" name= "e" value=1></td>
      <td><input type="radio" name= "e" value=1></td>
      <td><input type="radio" name= "e" value=1></td>
    </tr>
    <tr>
      <th scope="row">Somewhat</th>
      <td><input type="radio" name= "f" value=2 required="required"></td>
      <td><input type="radio" name= "f" value=2></td>
      <td><input type="radio" name= "f" value=2></td>
      <td><input type="radio" name= "f" value=2></td>
    </tr>
    <tr>
      <th scope="row">A lot</th>
      <td><input type="radio" name= "g" value=3 required="required"></td>
      <td><input type="radio" name= "g" value=3></td>
      <td><input type="radio" name= "g" value=3></td>
      <td><input type="radio" name= "g" value=3></td>
    </tr>
    <tr>
      <th scope="row">Most</th>
      <td><input type="radio" name= "h" value=4 required="required"></td>
      <td><input type="radio" name= "h" value=4></td>
      <td><input type="radio" name= "h" value=4></td>
      <td><input type="radio" name= "h" value=4></td>
    </tr>
  </tbody>
</table>

<hr>
<!-- SECTION 3 -->
<h3 style="text-align:center;">Row 3</h3>
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Helpful  <br>Trustworthy <br>Dependable <br>Loyal <br>Conservative <br>Organized </th>
      <th scope="col">Kind  <br>Understanding <br>Giving <br>Devoted <br>Warm <br>Poetic </th>
      <th scope="col">Playful  <br>Quick <br>Adventurous <br>Confrontive <br>Open Minded <br>Independent  </th>
      <th scope="col">Independent  <br>Exploring <br>Competent <br>Theoretical <br>Why Questions <br>Ingenious  </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Least</th>
      <td><input type="radio" name= "i" value=1 required="required"></td>
      <td><input type="radio" name= "i" value=1></td>
      <td><input type="radio" name= "i" value=1></td>
      <td><input type="radio" name= "i" value=1></td>
    </tr>
    <tr>
      <th scope="row">Somewhat</th>
      <td><input type="radio" name= "j" value=2 required="required"></td>
      <td><input type="radio" name= "j" value=2></td>
      <td><input type="radio" name= "j" value=2></td>
      <td><input type="radio" name= "j" value=2></td>
    </tr>
    <tr>
      <th scope="row">A lot</th>
      <td><input type="radio" name= "k" value=3 required="required"></td>
      <td><input type="radio" name= "k" value=3></td>
      <td><input type="radio" name= "k" value=3></td>
      <td><input type="radio" name= "k" value=3></td>
    </tr>
    <tr>
      <th scope="row">Most</th>
      <td><input type="radio" name= "l" value=4 required="required"></td>
      <td><input type="radio" name= "l" value=4></td>
      <td><input type="radio" name= "l" value=4></td>
      <td><input type="radio" name= "l" value=4></td>
    </tr>
  </tbody>
</table>
<hr>

<!-- SECTION 4 -->
<h3 style="text-align:center;">Row 4</h3>
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Follow Rules <br>Useful <br>Save Money <br>Concerned <br>Procedural<br> Cooperative </th>
      <th scope="col">Active  <br>Free Winning <br>Daring <br>Impulsive <br>Risk Taker </th>
      <th scope="col">Sharing  <br>Getting Along <br>Feelings <br>Tender <br>Inspirational <br>Dramatic </th>
      <th scope="col">Thinking  <br>Solving Problems <br>Perfectionistic <br>Determined <br>Complex <br>Composed  </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Least</th>
      <td><input type="radio" name= "m" value=1 required="required"></td>
      <td><input type="radio" name= "m" value=1></td>
      <td><input type="radio" name= "m" value=1></td>
      <td><input type="radio" name= "m" value=1></td>
    </tr>
    <tr>
      <th scope="row">Somewhat</th>
      <td><input type="radio" name= "n" value=2 required="required"></td>
      <td><input type="radio" name= "n" value=2></td>
      <td><input type="radio" name= "n" value=2></td>
      <td><input type="radio" name= "n" value=2></td>
    </tr>
    <tr>
      <th scope="row">A lot</th>
      <td><input type="radio" name= "o" value=3 required="required"></td>
      <td><input type="radio" name= "o" value=3></td>
      <td><input type="radio" name= "o" value=3></td>
      <td><input type="radio" name= "o" value=3></td>
    </tr>
    <tr>
      <th scope="row">Most</th>
      <td><input type="radio" name= "p" value=4 required="required"></td>
      <td><input type="radio" name= "p" value=4></td>
      <td><input type="radio" name= "p" value=4></td>
      <td><input type="radio" name= "p" value=4></td>
    </tr>
  </tbody>
</table>
<hr>

<!-- SECTION 5 -->
<h3 style="text-align:center;">Row 5</h3>
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Puzzles  <br>Seeking Info <br>Making Sense <br>Philosophical <br>Principled <br>Rational  </th>
      <th scope="col">Social Causes <br>Easy Going <br>Happy Endings <br>Approachable <br>Affectionate <br>Sympathetic  </th>
      <th scope="col">Exciting <br>Lively <br>Hands On <br>Courageous <br>Skillful <br>On Stage </th>
      <th scope="col">Pride <br>Tradition<br> Do Things Right <br>Orderly <br>Conventional <br>Careful  </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Least</th>
      <td><input type="radio" name= "q" value=1 required="required"></td>
      <td><input type="radio" name= "q" value=1></td>
      <td><input type="radio" name= "q" value=1></td>
      <td><input type="radio" name= "q" value=1></td>
    </tr>
    <tr>
      <th scope="row">Somewhat</th>
      <td><input type="radio" name= "r" value=2 required="required"></td>
      <td><input type="radio" name= "r" value=2></td>
      <td><input type="radio" name= "r" value=2></td>
      <td><input type="radio" name= "r" value=2></td>
    </tr>
    <tr>
      <th scope="row">A lot</th>
      <td><input type="radio" name= "s" value=3 required="required"></td>
      <td><input type="radio" name= "s" value=3></td>
      <td><input type="radio" name= "s" value=3></td>
      <td><input type="radio" name= "s" value=3></td>
    </tr>
    <tr>
      <th scope="row">Most</th>
      <td><input type="radio" name= "t" value=4 required="required"></td>
      <td><input type="radio" name= "t" value=4></td>
      <td><input type="radio" name= "t" value=4></td>
      <td><input type="radio" name= "t" value=4></td>
    </tr>
  </tbody>
</table>
<br><br><p align="center"><input class="btn btn-primary" type="submit" name="submit" value="Submit"></p>
</form>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</body>
</html>
