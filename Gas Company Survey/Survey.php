<!DOCTYPE html>
<html>
<head>
    <title>Gas Company Survey</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Gas Company Survey</h2>
    <form method="POST" action="Register.php">
        <br><br><br><br>
        <label for="satisfaction">1. How satisfied are you with the quality of our Gas/LPG services?</label><br>
        <input type="radio" id="satisfaction" name="satisfaction" value="Very satisfied"> 
        <label class="inp"> Very satisfied</label><br>
        <input type="radio" id="satisfaction" name="satisfaction" value="Satisfied"> 
        <label class="inp"> Satisfied</label><br>
        <input type="radio" id="satisfaction" name="satisfaction" value="Neutral"> 
        <label class="inp"> Neutral</label><br>
        <input type="radio" id="satisfaction" name="satisfaction" value="Dissatisfied"> 
        <label class="inp"> Dissatisfied</label><br>
        <input type="radio" id="satisfaction" name="satisfaction" value="Very dissatisfied"> 
        <label class="inp"> Very dissatisfied</label><br>
        <br>
        <label for="likes">2. How likely are you to recommend our Gas/LPG services to others?</label><br>
        <input type="radio" id="likes" name="likes" value="Very likey"> 
        <label class="inp"> Very likely</label><br>
        <input type="radio" id="likes" name="likes" value="Likely"> 
        <label class="inp"> Likely</label><br>
        <input type="radio" id="likes" name="likes" value="Neutral">
        <label class="inp"> Neutral</label><br>
        <input type="radio" id="likes" name="likes" value="Unlikely"> 
        <label class="inp"> Unlikely</label><br>
        <input type="radio" id="likes" name="likes" value="Very Unlikely">
        <label class="inp"> Very Unlikely</label><br>
        <br>
        <label for="aware">3. Are you aware of the safety measures we have in place for handling and delivering Gas/LPG?</label><br>
        <input type="radio" id="aware" name="aware" value="Yes, I am aware">
        <label class="inp"> Yes, I am aware</label><br>
        <input type="radio" id="aware" name="aware" value="I have some knowledge but would like more information">
        <label class="inp"> I have some knowledge but would like more information</label><br>
        <input type="radio" id="aware" name="aware" value="No, I am not aware">
        <label class="inp"> No, I am not aware</label><br>
        <br>
        <label for="rate">4. How would you rate the responsiveness and efficiency of our customer service team?</label><br>
        <input type="radio" id="rate" name="rate" value="Excellent">
        <label class="inp"> Excellent</label><br>
        <input type="radio" id="rate" name="rate" value="Good">
        <label class="inp"> Good</label><br>
        <input type="radio" id="rate" name="rate" value="Average">
        <label class="inp"> Average</label><br>
        <input type="radio" id="rate" name="rate" value="Poor">
        <label class="inp"> Poor</label><br>
        <input type="radio" id="rate" name="rate" value="Very Poor">
        <label class="inp"> Very Poor</label><br>
        <br>
        <label for="issues">5. Have you experienced any issues or concerns with our Gas/LPG services? If yes, please specify.</label><br>
        <input type="radio" id="issues" name="issues" value="Yes" onclick="issues_details.style.display='block'">
        <label class="inp"> Yes</label><br>
        <input type="radio" id="issues" name="issues" value="No" onclick="issues_details.style.display='none'">
        <label class="inp"> No</label><br>
        <textarea id="issues_details" name="issues_details" placeholder="Please specify" style="display: none;"></textarea>
        <br>
        <label for="pricing_satisfaction">6. How satisfied are you with the pricing and affordability of our Gas/LPG services?</label><br>
        <input type="radio" id="pricing_satisfaction" name="pricing_satisfaction" value="Very satisfied">
        <label class="inp"> Very satisfied</label><br>
        <input type="radio" id="pricing_satisfaction" name="pricing_satisfaction" value="Satisfied">
        <label class="inp"> Satisfied</label><br>
        <input type="radio" id="pricing_satisfaction" name="pricing_satisfaction" value="Neutral">
        <label class="inp"> Neutral</label><br>
        <input type="radio" id="pricing_satisfaction" name="pricing_satisfaction" value="Dissatisfied">
        <label class="inp"> Dissatisfied</label><br>
        <input type="radio" id="pricing_satisfaction" name="pricing_satisfaction" value="Very dissatisfied">
        <label class="inp"> Very dissatisfied</label><br>
        <br>
        <label for="features">7. Are there any additional services or features you would like to see from our Gas/LPG company?</label><br>
        <input type="radio" id="features" name="features" value="Yes" onclick="feature_details.style.display='block'">
        <label class="inp"> Yes</label><br>
        <input type="radio" id="features" name="features" value="No" onclick="feature_details.style.display='none'">
        <label class="inp"> No</label><br>
        <textarea id="feature_details" name="feature_details" placeholder="Please specify" style="display: none;"></textarea>
        <br>
        <label for="need">8. How frequently do you require gas/LPG refills or deliveries?</label><br>
        <input type="radio" id="need" name="need" value="Weekly">
        <label class="inp"> Weekly</label><br>
        <input type="radio" id="need" name="need" value="Bi-Weekly">
        <label class="inp"> Bi-Weekly</label><br>
        <input type="radio" id="need" name="need" value="Monthly">
        <label class="inp"> Monthly</label><br>
        <input type="radio" id="need" name="need" value="Quarterly">
        <label class="inp"> Quarterly</label><br>
        <input type="radio" id="need" name="need" value="Less Frequently">
        <label class="inp"> Less Frequently</label><br>
        <br>
        <label for="communicate">9. How well do you feel we communicate important updates or changes related to our gas/LPG services?</label><br>
        <input type="radio" id="communicate" name="communicate" value="Very Well">
        <label class="inp"> Very Well</label><br>
        <input type="radio" id="communicate" name="communicate" value="Well">
        <label class="inp"> Well</label><br>
        <input type="radio" id="communicate" name="communicate" value="Average">
        <label class="inp"> Average</label><br>
        <input type="radio" id="communicate" name="communicate" value="Poorly">
        <label class="inp"> Poorly</label><br>
        <input type="radio" id="communicate" name="communicate" value="Very Poorly">
        <label class="inp"> Very Poorly</label><br>
        <br>
        <label for="overall_satisfaction">10. Overall, how satisfied are you with our gas/LPG company?</label><br>
        <input type="radio" id="overall_satisfaction" name="overall_satisfaction" value="Very satisfied">
        <label class="inp"> Very satisfied</label><br>
        <input type="radio" id="overall_satisfaction" name="overall_satisfaction" value="Satisfied">
        <label class="inp"> Satisfied</label><br>
        <input type="radio" id="overall_satisfaction" name="overall_satisfaction" value="Neutral">
        <label class="inp"> Neutral</label><br>
        <input type="radio" id="overall_satisfaction" name="overall_satisfaction" value="Dissatisfied">
        <label class="inp"> Dissatisfied</label><br>
        <input type="radio" id="overall_satisfaction" name="overall_satisfaction" value="Very dissatisfied">
        <label class="inp"> Very dissatisfied</label><br>
        <br>
        <br><br>
        <br><br>

        <input type="submit" value="Submit">
        
    </form>
    <br><br>
        <div>
        <footer>
            <p>&copy Designed and Developed by<!--<a href="https://www.nrg-phoenix.com/" target="_blank"> NRG Phoenix--> Ari</a></p>
        </footer>
        </div>
</body>
</html>
