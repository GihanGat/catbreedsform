<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Cat Breeds Form</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script type="text/javascript" src="view.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body id="main_body" >
    <img id="top" src="top.png" alt="">
    <div id="form_container">
    
        <h1><a>Cat Breeds Form</a></h1>
        <form id="catbreedsform" class="appnitro"  action="https://catbreed-form.herokuapp.com/send.php" method="post">
            <div class="form_description">
            <h2>Cat Breeds</h2>
            </div>                      
            <ul >
            <li id="li_1" >
        <label class="description" for="breed_name">Breed Name</label>
        <div>
            <input id="breed_name" name="breed_name" class="element text medium" type="text" maxlength="255" value=""/> 
        </div> 
        </li>       
        <li id="li_2" >
          <span>
            <label for="friendliness" class="description">Friendliness</label>
            <label class="radio-inline choice">
              <input type="radio" name="friendliness" value="1" checked>1
            </label>
            <label class="radio-inline choice">
              <input type="radio" name="friendliness" value="2">2
            </label>
            <label class="radio-inline choice">
              <input type="radio" name="friendliness" value="3">3
            </label>
            <label class="radio-inline choice">
              <input type="radio" name="friendliness" value="4">4
            </label>
            <label class="radio-inline choice">
              <input type="radio" name="friendliness" value="5">5
            </label>
          </span>
        </li>
        <li id="li_3">
          <span>
            <label for="playfulness " class="description">Playfulness</label>
            <label class="radio-inline choice">
              <input type="radio" name="playfulness" value="1" checked>1
            </label>
            <label class="radio-inline choice">
              <input type="radio" name="playfulness" value="2">2
            </label>
            <label class="radio-inline choice">
              <input type="radio" name="playfulness" value="3">3
            </label>
            <label class="radio-inline choice">
              <input type="radio" name="playfulness" value="4">4
            </label>
            <label class="radio-inline choice">
              <input type="radio" name="playfulness" value="5">5
            </label>
          </span>
        </li>
        <li id="li_4">
          <span>
            <label for="activity" class="description">Activity</label>
            <label class="radio-inline choice">
              <input type="radio" name="activity" value="1" checked>1
            </label>
            <label class="radio-inline choice">
              <input type="radio" name="activity" value="2">2
            </label>
            <label class="radio-inline choice">
              <input type="radio" name="activity" value="3">3
            </label>
            <label class="radio-inline choice">
              <input type="radio" name="activity" value="4">4
            </label>
            <label class="radio-inline choice">
              <input type="radio" name="activity" value="5">5
            </label>
          </span>
          </li>
        <li id="li_5">
          <span>
            <label for="intelligence" class="description">Intelligence</label>
            <label class="radio-inline choice">
              <input type="radio" name="intelligence" value="1" checked>1
            </label>
            <label class="radio-inline choice">
              <input type="radio" name="intelligence"  value="2">2
            </label>
            <label class="radio-inline choice">
              <input type="radio" name="intelligence"  value="3">3
            </label>
            <label class="radio-inline choice">
              <input type="radio" name="intelligence"  value="4">4
            </label>
            <label class="radio-inline choice">
              <input type="radio" name="intelligence"  value="5">5
            </label>
          </span>
        </li>           
                <li class="buttons">        
                <input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
        </li>
            </ul>
        </form> 
        <div id="footer">
        </div>
    </div>
    <img id="bottom" src="bottom.png" alt="">
    </body>
</html>










<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cat Meter</title>
</head>
<body>
    <form action="https://catbreed-form.herokuapp.com/index.php" method="post">
        <div class="field">
            <label for="breed_name">Breed Name</label>
            <input type="text" name="breed_name" id="breed_name">
        </div>
        <div class="field">
            <label for="friendliness">Friendliness</label>
            <input type="text" name="friendliness" id="friendliness">
        </div>
        <div class="field">
            <label for="playfulness">Playfulness</label>
            <input type="text" name="playfulness" id="playfulness">
        </div>
        <div class="field">
            <label for="activity">Activity</label>
            <input type="text" name="activity" id="activity">
        </div>
        <div class="field">
            <label for="intelligence">Intelligence</label>
            <input type="datetime" name="intelligence" id="intelligence">
        </div>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
 -->