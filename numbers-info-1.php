<!DOCTYPE html>
<html lang="de">

<head>
  <title>Math - DHBW Mehms</title>
  <?php include("includes/meta.php"); ?>
  <style>
    :root {
      --banner-top: #b167eb;
      --banner-bottom: #4bd8f6;
    }

    .vines {
      animation: 0.2s color-p-primary forwards;
    }
  </style>
  <link rel="stylesheet" href="numbers.css">
</head>


<body>
  <?php include("includes/header.php"); ?>

  <main class="container">
  <div class="head">
    <h1>1</h1>
    <h5 style="margin-left: auto">The first number that had been counted</h5>
  </div>
  <div class="body" style="padding-bottom: 0">
    <div class="firstrow">
      <h3><span class="left">More information: 1</span></h3><hr>
    </div>
    <div class="text">
      <p>This number cannot miss the list, as it is not just the first number most people get to know, but also finding its place in most number 
        systems, with its own being probably the weirdest one could imagine: the unary system. It is also a central part of sign-value-notation: 
        as everyone who had counted at least a few numbers up could agree, the smallest step between two integers is always 1.<br>
        Everytime something is counted, 1 is part of it: the number deserves this spot due to its sheer importance, further advanced math is known 
        for using it next to the number '0' as basically the only important integers.
      </p>
  </div>
  </main>

  <?php include("includes/footer.php"); ?>
  <?php include("includes/bottom-navigation.php"); ?>
</body>

</html>