<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script src="{{asset('js/jquery.min.js')}}"></script>
</head>

<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="text-center p-0 mt-3 mb-2 w-100">
            <div class="px-0 pt-4 pb-0 mt-3 mb-3">
                <form id="form">
                    <ul id="progressbar">
                        <li class="active" id="step1">
                            <strong>Step 1</strong>
                        </li>
                        <li id="step2"><strong>Step 2</strong></li>
                        <li id="step3"><strong>Step 3</strong></li>
                        <li id="step4"><strong>Step 4</strong></li>
                    </ul>
                    <fieldset>
                        <div class="input-group justify-content-center">
                            <label for="meal-category" class="col-3 text-left">Please select a Meal</label>
                            <select id="meal-category" name="meal-category" class="col-2 form-control">
                                <option value="breakfast">Breakfast</option>
                                <option value="lunch">Lunch</option>
                                <option value="dinner">Dinner</option>
                            </select>
                        </div>

                        <div class="d-flex align-items-center error-text">
                            <p class="error-meal text-danger"></p>
                        </div>

                        <div class="input-group justify-content-center">
                            <label for="people" class="col-3 text-left">Please enter number of people</label>
                            <input class="col-2 form-control" type="number" id="people" name="people" min="1" max="10" required>
                        </div>

                        <div class="d-flex align-items-center error-text">
                            <p class="error-people text-danger"></p>
                        </div>

                        <input type="button" name="next-step"
                               class="next-step btn-disable" id="next-step-1" value="Next"/>
                    </fieldset>
                    <fieldset>
                        <h2>Welcome To GFG Step 2</h2>
                        <div class="row justify-content-between">
                            <input type="button" name="previous-step"
                                   class="previous-step"
                                   value="Previous"/>
                            <input type="button" name="next-step"
                                   class="next-step" value="Next"/>
                        </div>
                    </fieldset>
                    <fieldset>
                        <h2>Welcome To GFG Step 3</h2>
                        <input type="button" name="previous-step"
                               class="previous-step"
                               value="Previous Step"/>
                        <input type="button" name="next-step"
                               class="next-step" value="Final Step"/>
                    </fieldset>
                    <fieldset>
                        <div class="finish">
                            <h2 class="text text-center">
                                <strong>FINISHED</strong>
                            </h2>
                        </div>
                        <input type="button" name="previous-step"
                               class="previous-step"
                               value="Previous Step"/>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
<script>
    const baseUrl = "{{ url('/') }}"
</script>
<script src="{{asset('js/handle.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

</html>
