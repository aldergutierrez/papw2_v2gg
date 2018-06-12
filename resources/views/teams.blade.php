@extends('layouts.main')
@section('title', 'Revdev - Teams')


    <!-- Bootstrap core CSS -->
@section('content')
 <div class="container-fluid jobss">
<div class="fulljobs col-md-12" style="height: 50px;">
<div class="findblock col-md-6">
  <a href=""><span class="findlink TxtHola6">LOCAL</span></a>
</div>
<div class="findblock col-md-6">
  <div><a href=""><span class="findlink2 TxtHola6">GLOBAL</span></a></div>
</div>
</div>


 <div class="col-md-12"><hr class="style2">
 </div>
<?php
  $animationC= 0;
  $ArtDirectionC= 0;
  $ConceptArtC= 0;
  $FilmC= 0;
  $DesignC= 0;
  $BrogrammersC= 0;
  $GameDesignC= 0;
  $GamersC= 0;
  $IllustrationC= 0;
  $tresdC= 0;
  $MusicC= 0;
  $PhotographyC= 0;
  $VRARC= 0;
  $UIUXC= 0;
  $VFxC= 0;
  $WrittingC= 0;
?>
@foreach ($teams as $team)

 @if ($team->creativeField == 'Animation' )
       <?php
        $animationC++;
        ?>

    @endif

@if ($team->creativeField == 'Art Direction' )
       <?php
        $ArtDirectionC++;
        ?>

    @endif

@if ($team->creativeField == 'Character Design' )
       <?php
        $ConceptArtC++;
        ?>

    @endif

@if ($team->creativeField == 'Concept Art' )
       <?php
        $ConceptArtC++;
        ?>

    @endif

@if ($team->creativeField == 'Code' )
       <?php
        $BrogrammersC++;
        ?>

    @endif

@if ($team->creativeField == 'Film' )
       <?php
        $FilmC++;
        ?>

    @endif
@if ($team->creativeField == 'Branding' )
       <?php
        $DesignC++;
        ?>

    @endif
    
@if ($team->creativeField == 'Game Design' )
       <?php
        $GameDesignC++;
        ?>

    @endif
@if ($team->creativeField == 'Gameplay' )
       <?php
        $GamersC++;
        ?>

    @endif
    
@if ($team->creativeField == 'Graphic Design' )
       <?php
        $DesignC++;
        ?>

    @endif
@if ($team->creativeField == 'Illustration' )
       <?php
        $IllustrationC++;
        ?>

    @endif
    
@if ($team->creativeField == 'Low Poly' )
       <?php
        $tresdC++;
        ?>

    @endif

@if ($team->creativeField == 'Music' )
       <?php
        $MusicC++;
        ?>

    @endif

@if ($team->creativeField == 'MDA' )
       <?php
        $GameDesignC++;
        ?>

    @endif

@if ($team->creativeField == 'Photography' )
       <?php
        $PhotographyC++;
        ?>

    @endif

@if ($team->creativeField == 'Programming' )
       <?php
        $BrogrammersC++;
        ?>

    @endif

@if ($team->creativeField == 'Script' )
       <?php
        $BrogrammersC++;
        ?>

    @endif
    
@if ($team->creativeField == 'Sculpting' )
       <?php
        $tresdC++;
        ?>

    @endif


@if ($team->creativeField == 'VR/AR' )
       <?php
        $VRARC++;
        ?>

    @endif

@if ($team->creativeField == 'Tutorial' )
       <?php
        $BrogrammersC++;
        ?>

    @endif
    
@if ($team->creativeField == 'UI/UX' )
       <?php
        $UIUXC++;
        ?>

    @endif
@if ($team->creativeField == 'Visual Effects' )
       <?php
        $VFxC++;
        ?>

    @endif

@if ($team->creativeField == 'Web Design' )
       <?php
        $UIUXC++;
        $DesignC++;
        ?>

    @endif
    
@if ($team->creativeField == 'Writting' )
       <?php
        $WrittingC++;
        ?>

    @endif


@endforeach

<div class="col-md-12">
          <div class="row col-md-6">
            <a href="" class="TxtHola3"><span>Animation</span></a>
         </div>
         <div class="col-md-2 TxtHola4">
              <span class="glyphicon glyphicon-picture"></span>
            {{ $animationC }} Posts
          </div>
            <div class="col-md-2 TxtHola4">
              <span class=" glyphicon glyphicon-user"></span>
            0 Members
          </div>
          <div class="col-md-2 TxtHola4">
              <button type="button" class=" btn btn-azul">Join</button>
          </div>
      <div class="col-md-12"><hr class="style2"></div>
</div>

<div class="col-md-12">
          <div class="row col-md-6">
            <a href="" class="TxtHola3"><span>Art Directors</span></a>
         </div>
         <div class="col-md-2 TxtHola4">
              <span class="glyphicon glyphicon-picture"></span>
            {{ $ArtDirectionC }} Posts
          </div>
            <div class="col-md-2 TxtHola4">
              <span class=" glyphicon glyphicon-user"></span>
            0 Members
          </div>
          <div class="col-md-2 TxtHola4">
              <button type="button" class=" btn btn-azul">Join</button>
          </div>
      <div class="col-md-12"><hr class="style2"></div>
</div>
<div class="col-md-12">
          <div class="row col-md-6">
            <a href="" class="TxtHola3"><span>Concept Artists</span></a>
         </div>
         <div class="col-md-2 TxtHola4">
              <span class="glyphicon glyphicon-picture"></span>
            {{ $ConceptArtC }} Posts
          </div>
            <div class="col-md-2 TxtHola4">
              <span class=" glyphicon glyphicon-user"></span>
            0 Members
          </div>
          <div class="col-md-2 TxtHola4">
              <button type="button" class=" btn btn-azul">Join</button>
          </div>
      <div class="col-md-12"><hr class="style2"></div>
</div>

<div class="col-md-12">
          <div class="row col-md-6">
            <a href="" class="TxtHola3"><span>Film Lovers</span></a>
         </div>
         <div class="col-md-2 TxtHola4">
              <span class="glyphicon glyphicon-picture"></span>
            {{ $FilmC }} Posts
          </div>
            <div class="col-md-2 TxtHola4">
              <span class=" glyphicon glyphicon-user"></span>
            0 Members
          </div>
          <div class="col-md-2 TxtHola4">
              <button type="button" class=" btn btn-azul">Join</button>
          </div>
      <div class="col-md-12"><hr class="style2"></div>
</div>
<div class="col-md-12">
          <div class="row col-md-6">
            <a href="" class="TxtHola3"><span>Graphic Designers</span></a>
         </div>
         <div class="col-md-2 TxtHola4">
              <span class="glyphicon glyphicon-picture"></span>
            {{ $DesignC }} Posts
          </div>
            <div class="col-md-2 TxtHola4">
              <span class=" glyphicon glyphicon-user"></span>
            0 Members
          </div>
          <div class="col-md-2 TxtHola4">
              <button type="button" class=" btn btn-azul">Join</button>
          </div>
      <div class="col-md-12"><hr class="style2"></div>
</div>

<div class="col-md-12">
          <div class="row col-md-6">
            <a href="" class="TxtHola3"><span>Brogrammers</span></a>
         </div>
         <div class="col-md-2 TxtHola4">
              <span class="glyphicon glyphicon-picture"></span>
            {{ $BrogrammersC }} Posts
          </div>
            <div class="col-md-2 TxtHola4">
              <span class=" glyphicon glyphicon-user"></span>
            0 Members
          </div>
          <div class="col-md-2 TxtHola4">
              <button type="button" class=" btn btn-azul">Join</button>
          </div>
      <div class="col-md-12"><hr class="style2"></div>
</div>
<div class="col-md-12">
          <div class="row col-md-6">
            <a href="" class="TxtHola3"><span>Game Designers</span></a>
         </div>
         <div class="col-md-2 TxtHola4">
              <span class="glyphicon glyphicon-picture"></span>
            {{ $GameDesignC }} Posts
          </div>
            <div class="col-md-2 TxtHola4">
              <span class=" glyphicon glyphicon-user"></span>
            0 Members
          </div>
          <div class="col-md-2 TxtHola4">
              <button type="button" class=" btn btn-azul">Join</button>
          </div>
      <div class="col-md-12"><hr class="style2"></div>
</div>

<div class="col-md-12">
          <div class="row col-md-6">
            <a href="" class="TxtHola3"><span>Gamers</span></a>
         </div>
         <div class="col-md-2 TxtHola4">
              <span class="glyphicon glyphicon-picture"></span>
            {{ $GamersC }} Posts
          </div>
            <div class="col-md-2 TxtHola4">
              <span class=" glyphicon glyphicon-user"></span>
            0 Members
          </div>
          <div class="col-md-2 TxtHola4">
              <button type="button" class=" btn btn-azul">Join</button>
          </div>
      <div class="col-md-12"><hr class="style2"></div>
</div>
<div class="col-md-12">
          <div class="row col-md-6">
            <a href="" class="TxtHola3"><span>Illustrators</span></a>
         </div>
         <div class="col-md-2 TxtHola4">
              <span class="glyphicon glyphicon-picture"></span>
            {{ $IllustrationC }} Posts
          </div>
            <div class="col-md-2 TxtHola4">
              <span class=" glyphicon glyphicon-user"></span>
            0 Members
          </div>
          <div class="col-md-2 TxtHola4">
              <button type="button" class=" btn btn-azul">Join</button>
          </div>
      <div class="col-md-12"><hr class="style2"></div>
</div>

<div class="col-md-12">
          <div class="row col-md-6">
            <a href="" class="TxtHola3"><span>3D Community</span></a>
         </div>
         <div class="col-md-2 TxtHola4">
              <span class="glyphicon glyphicon-picture"></span>
            {{ $tresdC }} Posts
          </div>
            <div class="col-md-2 TxtHola4">
              <span class=" glyphicon glyphicon-user"></span>
            0 Members
          </div>
          <div class="col-md-2 TxtHola4">
              <button type="button" class=" btn btn-azul">Join</button>
          </div>
      <div class="col-md-12"><hr class="style2"></div>
</div>

<div class="col-md-12">
          <div class="row col-md-6">
            <a href="" class="TxtHola3"><span>Music Group</span></a>
         </div>
         <div class="col-md-2 TxtHola4">
              <span class="glyphicon glyphicon-picture"></span>
            {{ $MusicC }} Posts
          </div>
            <div class="col-md-2 TxtHola4">
              <span class=" glyphicon glyphicon-user"></span>
            0 Members
          </div>
          <div class="col-md-2 TxtHola4">
              <button type="button" class=" btn btn-azul">Join</button>
          </div>
      <div class="col-md-12"><hr class="style2"></div>
</div>

<div class="col-md-12">
          <div class="row col-md-6">
            <a href="" class="TxtHola3"><span>Photographers</span></a>
         </div>
         <div class="col-md-2 TxtHola4">
              <span class="glyphicon glyphicon-picture"></span>
            {{ $PhotographyC }} Posts
          </div>
            <div class="col-md-2 TxtHola4">
              <span class=" glyphicon glyphicon-user"></span>
            0 Members
          </div>
          <div class="col-md-2 TxtHola4">
              <button type="button" class=" btn btn-azul">Join</button>
          </div>
      <div class="col-md-12"><hr class="style2"></div>
</div>

<div class="col-md-12">
          <div class="row col-md-6">
            <a href="" class="TxtHola3"><span>VR/AR</span></a>
         </div>
         <div class="col-md-2 TxtHola4">
              <span class="glyphicon glyphicon-picture"></span>
            {{ $VRARC }} Posts
          </div>
            <div class="col-md-2 TxtHola4">
              <span class=" glyphicon glyphicon-user"></span>
            0 Members
          </div>
          <div class="col-md-2 TxtHola4">
              <button type="button" class=" btn btn-azul">Join</button>
          </div>
      <div class="col-md-12"><hr class="style2"></div>
</div>

<div class="col-md-12">
          <div class="row col-md-6">
            <a href="" class="TxtHola3"><span>UI/UX</span></a>
         </div>
         <div class="col-md-2 TxtHola4">
              <span class="glyphicon glyphicon-picture"></span>
            {{ $UIUXC }} Posts
          </div>
            <div class="col-md-2 TxtHola4">
              <span class=" glyphicon glyphicon-user"></span>
            0 Members
          </div>
          <div class="col-md-2 TxtHola4">
              <button type="button" class=" btn btn-azul">Join</button>
          </div>
      <div class="col-md-12"><hr class="style2"></div>
</div>

<div class="col-md-12">
          <div class="row col-md-6">
            <a href="" class="TxtHola3"><span>VFx Community</span></a>
         </div>
         <div class="col-md-2 TxtHola4">
              <span class="glyphicon glyphicon-picture"></span>
            {{ $VFxC }} Posts
          </div>
            <div class="col-md-2 TxtHola4">
              <span class=" glyphicon glyphicon-user"></span>
            0 Members
          </div>
          <div class="col-md-2 TxtHola4">
              <button type="button" class=" btn btn-azul">Join</button>
          </div>
      <div class="col-md-12"><hr class="style2"></div>
</div>

<div class="col-md-12">
          <div class="row col-md-6">
            <a href="" class="TxtHola3"><span>Writers</span></a>
         </div>
         <div class="col-md-2 TxtHola4">
              <span class="glyphicon glyphicon-picture"></span>
            {{ $WrittingC }} Posts
          </div>
            <div class="col-md-2 TxtHola4">
              <span class=" glyphicon glyphicon-user"></span>
            0 Members
          </div>
          <div class="col-md-2 TxtHola4">
              <button type="button" class=" btn btn-azul">Join</button>
          </div>
      <div class="col-md-12"><hr class="style2"></div>
</div>


@endsection


