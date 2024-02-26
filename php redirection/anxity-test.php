<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anxiety and Depression Test</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="../css/anxity.css">
</head>
<body>
 <div class="form-container">
     <form class="survey-form anxiety-form" method="post" action="">		
        <h1><i class="far fa-list-alt"></i> Anxiety Test</h1>

        <div class="steps">
            <?php for ($i = 1; $i <= 7; $i++): ?>
                <div class="step <?php echo ($i === 1) ? 'current' : ''; ?>"></div>
            <?php endfor; ?>
        </div>
        
        <!-- Question 1 -->
        <div class="step-content current" data-step="1">
            <div class="fields">
                <p>I've been unable to stay in one place - like sitting down - for any length of time.</p>
                <div class="group">
                    <label for="anxity-radio1">
                        <input type="radio" name="question1" id="anxity-radio1" value="Never">
                        Never
                    </label>
                    <label for="anxity-radio2">
                        <input type="radio" name="question1" id="anxity-radio2" value="Some of the time">
                        Some of the time
                    </label>
                    <label for="anxity-radio3">
                        <input type="radio" name="question1" id="anxity-radio3" value="Much of the time">
                        Much of the time
                    </label>
                    <label for="anxity-radio4">
                        <input type="radio" name="question1" id="anxity-radio4" value="Nearly all the time">
                        Nearly all the time
                    </label>
                </div>					
            </div>
            <div class="buttons">
                <a href="#" class="btn" data-set-step="2">Next</a>
            </div>
        </div>
        
        <!-- Remaining Questions and Submit Button -->
        <?php for ($i = 2; $i <= 7; $i++): ?>
            <div class="step-content" data-step="<?php echo $i; ?>">
                <div class="fields">
                    <p>I've been unable to stay in one place - like sitting down - for any length of time.</p>
                    <div class="group">
                        <label for="anxity-radio1">
                            <input type="radio" name="question<?php echo $i; ?>" id="anxity-radio1" value="Never">
                            Never
                        </label>
                        <label for="anxity-radio2">
                            <input type="radio" name="question<?php echo $i; ?>" id="anxity-radio2" value="Some of the time">
                            Some of the time
                        </label>
                        <label for="anxity-radio3">
                            <input type="radio" name="question<?php echo $i; ?>" id="anxity-radio3" value="Much of the time">
                            Much of the time
                        </label>
                        <label for="anxity-radio4">
                            <input type="radio" name="question<?php echo $i; ?>" id="anxity-radio4" value="Nearly all the time">
                            Nearly all the time
                        </label>
                    </div>		
                </div>
                <div class="buttons">
                    <a href="#" class="btn alt" data-set-step="<?php echo $i - 1; ?>">Prev</a>
                    <?php if ($i === 7): ?>
                        <button type="submit" class="btn">Submit</button>
                    <?php else: ?>
                        <a href="#" class="btn" data-set-step="<?php echo $i + 1; ?>">Next</a>
                    <?php endif; ?>
                </div>
            </div>
        <?php endfor; ?>

    </form>
    <!-- Depression Form -->
    <form class="survey-form depression-form" method="post" action="">		
        <h1><i class="far fa-list-alt"></i> Depression Test</h1>

        <div class="steps">
            <?php for ($i = 1; $i <= 7; $i++): ?>
                <div class="step <?php echo ($i === 1) ? 'current' : ''; ?>"></div>
            <?php endfor; ?>
        </div>
        
        <!-- Question 1 -->
        <div class="step-content current" data-step="1">
            <div class="fields">
                <p>I've been unable to stay in one place - like sitting down - for any length of time.</p>
                <div class="group">
                    <label for="depression-radio1">
                        <input type="radio" name="question1" id="depression-radio1" value="Never">
                        Never
                    </label>
                    <label for="depression-radio2">
                        <input type="radio" name="question1" id="depression-radio2" value="Some of the time">
                        Some of the time
                    </label>
                    <label for="depression-radio3">
                        <input type="radio" name="question1" id="depression-radio3" value="Much of the time">
                        Much of the time
                    </label>
                    <label for="depression-radio4">
                        <input type="radio" name="question1" id="depression-radio4" value="Nearly all the time">
                        Nearly all the time
                    </label>
                </div>					
            </div>
            <div class="buttons">
                <a href="#" class="btn" data-set-step="2">Next</a>
            </div>
        </div>
        
        <!-- Remaining Questions and Submit Button -->
        <?php for ($i = 2; $i <= 7; $i++): ?>
            <div class="step-content" data-step="<?php echo $i; ?>">
                <div class="fields">
                    <p>I've been unable to stay in one place - like sitting down - for any length of time.</p>
                    <div class="group">
                        <label for="depression-radio1">
                            <input type="radio" name="question<?php echo $i; ?>" id="depression-radio1" value="Never">
                            Never
                        </label>
                        <label for="depression-radio2">
                            <input type="radio" name="question<?php echo $i; ?>" id="depression-radio2" value="Some of the time">
                            Some of the time
                        </label>
                        <label for="depression-radio3">
                            <input type="radio" name="question<?php echo $i; ?>" id="depression-radio3" value="Much of the time">
                            Much of the time
                        </label>
                        <label for="depression-radio4">
                            <input type="radio" name="question<?php echo $i; ?>" id="depression-radio4" value="Nearly all the time">
                            Nearly all the time
                        </label>
                    </div>		
                </div>
                <div class="buttons">
                    <a href="#" class="btn alt" data-set-step="<?php echo $i - 1; ?>">Prev</a>
                    <?php if ($i === 7): ?>
                        <button type="submit" class="btn">Submit</button>
                    <?php else: ?>
                        <a href="#" class="btn" data-set-step="<?php echo $i + 1; ?>">Next</a>
                    <?php endif; ?>
                </div>
            </div>
        <?php endfor; ?>

    </form>
 </div>
 <script>
    document.addEventListener("DOMContentLoaded", function() {
        const setStep = (form, step) => {
            form.querySelectorAll(".step-content").forEach(element => element.style.display = "none");
            form.querySelector(`[data-step="${step}"]`).style.display = "block";
            form.querySelectorAll(".steps .step").forEach((element, index) => {
                if (index < step - 1) {
                    element.classList.add("complete");
                    element.classList.remove("current");
                } else if (index === step - 1) {
                    element.classList.add("current");
                    element.classList.remove("complete");
                } else {
                    element.classList.remove("complete", "current");
                }
            });
        };

        document.querySelectorAll(".survey-form").forEach(form => {
            form.querySelectorAll("[data-set-step]").forEach(element => {
                element.addEventListener("click", event => {
                    event.preventDefault();
                    const nextStep = parseInt(element.dataset.setStep);
                    const currentStep = parseInt(form.querySelector(".step-content.current").dataset.step);
                    if (currentStep === 7) {
                        const options = form.querySelectorAll(".step-content.current input[type='radio']:checked");
                        if (options.length === 0) {
                            alert("Please select an option to proceed.");
                            return;
                        }
                    }
                    setStep(form, nextStep);
                });
            });

            form.addEventListener("submit", function(event) {
                event.preventDefault();
                let score = 0;
                const options = form.querySelectorAll(".step-content input[type='radio']:checked");
                
                options.forEach(option => {
                    score += parseInt(option.value); // Adding points based on selected options
                });

                let resultType;
                if (form.classList.contains("anxiety-form")) {
                    if (score <= 8) {
                        resultType = "Minimal Anxiety";
                    } else if (score <= 16) {
                        resultType = "Mild Anxiety";
                    } else if (score <= 24) {
                        resultType = "Moderate Anxiety";
                    } else {
                        resultType = "Severe Anxiety";
                    }
                } else if (form.classList.contains("depression-form")) {
                    if (score <= 8) {
                        resultType = "Minimal Depression";
                    } else if (score <= 16) {
                        resultType = "Mild Depression";
                    } else if (score <= 24) {
                        resultType = "Moderate Depression";
                    } else {
                        resultType = "Severe Depression";
                    }
                }
                alert(`Your result: ${resultType}`);
                // Optionally, you can submit the form here if needed
                // form.submit();
            });
        });
    });
</script>

</body>
</html>
