@extends('layouts.index')

@section('styles')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
@endsection

@section('content')
    <section class="as-seen-on page">
        <h1 class="text-center">Please fill in the form</h1>
    </section>

    <!-- Hero section starts-->
    <section id="hero" class="hero page">
        <div class="details">
            <div class="container-custom group" style="padding:0% 15%;">
                <form>
                    <div class="form-group">
                        <label for="pick_up">Pick up</label>
                        <select class="form-control"  name="pick_up" required>
                            <option value="Podgorica_airport">Podgorica Airoport</option>
                            <option value="Tivat_airport">Tivat Airport</option>
                            <option value="other">Other</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="drop_off">Drop off</label>
                        <select class="form-control"  name="drop_off">
                            <option value="Andrijevica">Andrijevica</option>
                            <option value="Bar">Bar</option>
                            <option value="Berane">Berane</option>
                            <option value="Bijelo Polje">Bijelo Polje</option>
                            <option value="Budva">Budva</option>
                            <option value="Cetinje">Cetinje</option>
                            <option value="Danilovgrad">Danilovgrad</option>
                            <option value="Gusinje">Gusinje</option>
                            <option value="Herceg Novi">Herceg Novi</option>
                            <option value="Kolasin">Kolasin</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Mojkovac">Mojkovac</option>
                            <option value="Niksic">Nikšić</option>
                            <option value="Petnjica">Petnjica</option>
                            <option value="Plav">Plav</option>
                            <option value="Pluzine">Plužine</option>
                            <option value="Pljevlja">Pljevlja</option>
                            <option value="Podgorica">Podgorica</option>
                            <option value="Rozaje">Rožaje</option>
                            <option value="Savnik">Šavnik</option>
                            <option value="Tivat">Tivat</option>
                            <option value="Ulcinj">Ulcinj</option>
                            <option value="Zabljak">Žabljak</option>
                            <option value="Dubrovnik">Dubrovnik</option>
                            <option value="Skadar">Shkoder</option>
                            <option value="other">Other</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="dropoff-address">DROP OFF address</label>
                        <input type="text" class="form-control" name="dropoff-address">
                    </div>
                    <div class="form-group">
                        <label for="time">Time</label>
                        <input type="time" class="form-control" name="time">
                    </div>
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="text" name="date"  id="datepicker" class="form-control">

                    </div>
                    <div class="form-group">
                        <label for="flight-number">Flight number</label>
                        <input type="text" class="form-control" name="flight-number">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelect1">Example select</label>
                        <select class="form-control" id="exampleSelect2" name="route">
                            <option>1</option>
                            <option>2</option>
                            <option value="other">Other</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelect2">Example multiple select</label>
                        <select multiple class="form-control" id="exampleSelect3">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea">Example textarea</label>
                        <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                        <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                    </div>
                    <fieldset class="form-group">
                        <legend>Radio buttons</legend>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                Option one is this and that&mdash;be sure to include why it's great
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
                                Option two can be something else and selecting it will deselect option one
                            </label>
                        </div>
                        <div class="form-check disabled">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
                                Option three is disabled
                            </label>
                        </div>
                    </fieldset>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                            Check me out
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div><!-- End: .container-custom -->
        </div><!-- End: .details -->
    </section>
    <!-- Hero section ends-->
@endsection

@section('scripts')

    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <script class="">
        // Odabir jezika


        $(document).on('change', 'select', function() {

            let name =  $(this).attr('name');

            if($(this).val() == 'other') {
                $(this).replaceWith(`<input type="text" class="form-control" name="${name}" value="ehhed" placeholder="Enter desired location">`); // the selected options’s value
            }


        });

        $(function() {
            $("#datepicker").datepicker();
        });

    </script>


@endsection