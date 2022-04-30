<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=900, initial-scale=1, shrink-to-fit=no">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
    <link rel="icon" href="{{asset('logo.png')}}">
    <link href="https://fonts.googleapis.com/css?family=Anton|Be+Vietnam:800&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="{{asset('boots/signin/print.css')}}" rel="stylesheet">

    <style>
        .badge_bg{
                background-image: url("{{ asset('img/BG2.png') }}");
            }
    </style>

    <title>PRINT FROM NOT-PRINTED</title>


  </head>
  <body>
  <div class="container">

        <table class="table" style="width:100%">
            <thead>
                <tr>
                   <th scope="col">
                    <form action="/confirm_print_notprinted" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-success btn-lg pageButton">CONFIRM PRINT</button>
                        <button type="submit" class="btn btn-warning btn-lg pageButton" formaction="/reset_print_notprinted">I DID NOT PRINT! (GO BACK)</button>
                    </form>
                    <br/>
                    <button class="btn btn-danger btn-lg pageButton" onClick="window.print();">PRINT</button>
                    <button class="btn btn-danger btn-lg pageButton" onClick="window.print();">PRINT</button>
                    <button class="btn btn-danger btn-lg pageButton" onClick="window.print();">PRINT</button>
                   </th>
                   <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php $i=0;?>
                @foreach($members as $ids)
                <?php if($i%2 === 0) echo '<tr>'; ?>

                   <td>
                        <?php
                        $num = $ids->id;
                        $num_length = strlen((string)$num);

                        switch($num_length){
                            case 1:
                                $id = "00000".$num;
                                break;
                            case 2:
                                $id = "0000".$num;
                                break;
                            case 3:
                                $id = "000".$num;
                                break;
                            case 4:
                                $id = "00".$num;
                                break;
                            case 5:
                                $id = "0".$num;
                                break;

                            default :
                                $id = "UNCONFIRMED";
                                break;
                        }

                        //GET ALL MEMBER VARIABLES FROM DATABASE
                        $pin = $ids->pin;
                        $title = $ids->title;
                        $firstname = $ids->firstname;
                        $lastname = $ids->lastname;
                        $phone = $ids->phone;
                        $email = $ids->email;
                        $sex = $ids->sex;
                        $province = $ids->province;
                        $diocese = $ids->diocese;
                        $church = $ids->church;
                        $designation = $ids->designation;
                        $committee = $ids->committee;
                        $user_photo = $ids->user_photo;
                        $color = $ids->color;

                        //IF THE MEMBER IS ASSIGNED TO A COMMITEE, THEN SHOW ON THE TAG THE COMMITEE NAME IN PLACE OF THE DESIGNATION
                        if($committee !== "NULL"){
                        $designation = $committee;
                        }

                        //LET THE BARCODE NUMBER BE TAKEN FROM THE MEMBER ID IN THE DATABASE
                        $barcode = $id;

                        //SET THE TAGNAME TO BE THE COMBINATION OF THE TITLE, FIRSTNAME AND LASTNAME
                        $tag_name = $title." ".$firstname;


                        ?>

                        <!-- THE BADGE -->
                        <div class="row badge_bg relative">
                            <div>
                                <img class="badge_pic" src="{{ asset('avatars/'.$user_photo) }}" alt="*" width="155" height="163">
                            <div>
                            <div class="b relative">
                                @if(strlen($tag_name)>=22)
                                <div class="badge_name_small">{{ $tag_name }}</div>
                                @else
                                <div class="badge_name">{{ $tag_name }}</div>
                                @endif

                                @if(strlen($lastname)>=17)
                                <div class="badge_lastname_small">{{ $lastname }}</div>
                                @else
                                <div class="badge_lastname">{{ $lastname }}</div>
                                @endif

                                @if(strlen($diocese)>=13)
                                <div class="badge_diocese_small">{{ $diocese }}</div>
                                @else
                                <div class="badge_diocese">{{ $diocese }}</div>
                                @endif

                                @if(strlen($designation)>=9)
                                <div class="badge_designation_small">{{ $designation }}</div>
                                @else
                                <div class="badge_designation">{{ $designation }}</div>
                                @endif

                                <div class="badge_barcode">
                                    <img src="https://api.qrserver.com/v1/create-qr-code/?data={{ $barcode }}&amp;size=100x100" alt="" title="DIVCCON" width="50" height="50" />
                                </div>

                                <div>
                                    <p class="number">#{{ $id }}</p>
                                </div>

                            </div>
                        <div>
                        <!-- /THE BADGE -->
                   </td>

                <?php if($i%2 === 1) echo '</tr>'; $i++; ?>
                @endforeach
            </tbody>
        </table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <div>
</body>
</html>
