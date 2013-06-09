@extends('layout')

@section('content')

<div class="container">
    <div class="marketing">
        <h3>Create class room or home work activities yourself</h3>
        <p>Just follow our simple DSL and you will have your own item online in no time.</p>

        <input >Teaser image, Teaser image big
        <type select
              homework assignment
              video
              writing assignment
              quiz
              daily tracking
        <description>
            sdfsdf
            <textarea rows="3"></textarea>
        </description>
        <data> JSON</data>

        <input type="text" placeholder="Text input">

        <label class="checkbox">
            <input type="checkbox" value="">
            Option one is this and that—be sure to include why it's great
        </label>


        <ul class="nav nav-tabs">
            <li class="active">
                <a href="#">Home</a>
                <label class="radio">
                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                    Option one is this and that—be sure to include why it's great
                </label>
                <label class="radio">
                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                    Option two can be something else and selecting it will deselect option one
                </label>
            </li>
            <li><a href="#">Checkbox test</a></li>
            <div class="btn-group btn-group-vertical">
                ...
            </div>
            <li><a href="#">Checker Test</a>
                <label class="checkbox inline">
                    <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
                </label>
                <label class="checkbox inline">
                    <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
                </label>
                <label class="checkbox inline">
                    <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
                </label>

            </li>
        </ul>



        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Save changes</button>
            <button type="button" class="btn">Cancel</button>
        </div>

</div>
</div>


@stop