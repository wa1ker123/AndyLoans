<div class="row">
<div class="col-12 py-3">
<label for="fName">How Much Do you Need?</label>
[number* amount default:get min:300 max:10000 id:amount placeholder "Loan Amount"]
</div>
<div class="col-12 py-3">
<label for="loan_reason">Reason For Loan</label>
[select* loan_reason id:loan_reason "Debt Consolidation|debtConsolidation" "Emergency Situation|emergencySituation" "Auto Repairs|autoRepair" "Auto Purchase|autoPurchase" "Moving House|moving" "Home Improvement|homeImprovement" "Medical|medical" "Bsuiness|business" "Vacation|vacation" "Taxes|taxes" "Rent / Mortgage|rentOrMortgage" "Wedding|wedding" "Major Purchase|majorPurchase" "Other |other"]
</div>
<div class="col-12 py-3">
<label for="fName">What is your Credit Rating?</label>
[select* credit_type id:credit_type include_blank "720+|excellent" "660-720|good" "500-660|fair" "Below 500|poor" "Unsure|notSure"]
</div>
<div class="col-12 py-3 col-md-6">
<label for="fName">First Name</label>
[text* fName id:fName placeholder "First Name"]
</div>
<div class="col-12 py-3 col-md-6">
<label for="lName">Last Name</label>
[text* lName id:lName placeholder "Last Name"]
</div>
<div class="col-12 py-3">
<label for="email">Email Address</label>
[email* email id:email placeholder "Email Address"]
</div>
<div class="col-12 col-md-6 py-3">
<label for="phone">Mobile Phone Number</label>
[tel* phone id:phone placeholder "Mobile Phone"]
</div>
<div class="col-12 col-md-6 py-3">
<label for="phone">Workplace Phone Number</label>
[tel* workPhone id:workPhone placeholder "Work Phone"]
</div>
<div class="col-12 py-3">
<label for="callTime">Preferred Call Time</label>
[select* callTime "Anytime" "Morning" "Afternoon" "Evening"]
</div>
<div class="col-12 py-3">
<label for="address">Address</label>
[text* address id:address placeholder "Address"]
</div>
<div class="col-12 py-3">
<label for="lengthAtAddress">Length at Address (Years)</label>
[number* lengthAtAddress min:0 id:lengthAtAddress placeholder "Length At Current Address (Years)"]
</div>
<div class="col-12 py-3 col-md-8">
<label for="city">City</label>
[text* city id:city placeholder "City"]
</div>
<div class="col-12 py-3 col-md-4">
<label for="zip">Zip Code</label>
[number* zip min:0 id:zip placeholder "Zip Code"]
</div>
<div class="col-12 py-3">
<label for="state">State</label>
[select* state "Alabama|AL" "Alaska|AK" "Arizona|AZ" "Arkansas|AR" "California|CA" "Colorado|CO" "Connecticut|CT" "Delaware|DE" "Washington DC|DC" "Florida|FL" "Georgia|GA" "Hawaii|HI" "Idaho|ID" "Illinois|IL" "Indiana|IN" "Iowa|IA" "Kansas|KS" "Kentucky|KY" "Louisiana|LA" "Maine|ME"  "Maryland|MD" "Massachusetts|MA" "Michigan|MI" "Minnesota|MN" "Mississippi|MS" "Missouri|MO" "Montana|MT" "Nebraska|NE" "Nevada|NV" "New Hampshire|NH" "New Jersey|NJ" "New Mexico|NM" "New York|NY" "North Carolina|NC" "North Dakota|ND" "Ohio|OH" "Oklahoma|OK" "Oregon|OR" "Pennslyvania|PA" "Rhode Island|RI" "South Carolina|SC" "South Dakota|SD" "Tennessee|TN" "Texas|TX" "Utah|UT" "Vermont|VT" "Virginia|VA" "Washington|WA" "West Virginia|WV" "Wisconsin|WI" "Wyoming|WY"]
</div>
<div class="col-12 py-3">
<label for="rentOwn">Do you own a house?</label>
[select* rentOwn id:rentOwn "Yes|Own" "No|Rent" ]
</div>
<div class="col-12 py-3">
<label for="bDate">Birth Date</label>
[date* bDate id:bDate placeholder "Birth Date"]
</div>
<div class="col-12 py-3">
<label for="ssn">Social Security Number</label>
[tel* ssn id:ssn placeholder "Social Security Number"]
</div>
<div class="col-12 py-3">
<label for="incomeSource">Primary Income Source</label>
[select* incomeSource id:incomeSource include_blank "Employment" "Selfemployment" "Benefits" "Unemployed"]
</div>
<div class="col-12 py-3 col-md-6">
<label for="employerName">Employer</label>
[text* employerName id:employerName placeholder "Employer"]
</div>
<div class="col-12 py-3 col-md-6">
<label for="timeEmployed">How Many Years have you been employed at your current location?</label>
[number* timeEmployed min:0 id:timeEmployed placeholder "Time Employed in Years"]
</div>
<div class="col-12 py-3">
<label for="jobTitle">Job Title</label>
[text* jobTitle id:jobTitle placeholder "Job Title"]
</div>
<div class="col-12 py-3">
<label for="employerPhone">Employers Contact Phone</label>
[tel* employerPhone id:employerPhone placeholder "Employers Phone"]
</div>
<div class="col-12 py-3">
<label for="monthlyNetIncome">Monthly Net Income</label>
[number* monthlyNetIncome min:0 id:monthlyNetIncome placeholder "Monthly Net Income"]
</div>
<div class="col-12 py-3">
<label for="jobTitle">How frequently are you paid?</label>
[select* paidEvery id:paidEvery include_blank "Biweekly" "Weekly" "Monthly" "Twicemonthly"]
</div>
<div class="col-12 py-3">
<label for="nextPayday">Next Pay Date</label>
[date* nextPayday id:nextPayday placeholder "Next Paydate"]
</div>
<div class="col-12 py-3">
<label for="secondPayday">Pay Date After Next</label>
[date* secondPayday id:secondPayday placeholder "Paydate after next"]
</div>
<div class="col-12 py-3">
<label for="abaNumber">Bank ABA Number</label>
[number* abaNumber min:0 id:abaNumber placeholder "Bank ABA Number"]
</div>
<div class="col-12 py-3">
<label for="accountNumber">Your Bank Account Number</label>
[number* accountNumber min:0 id:accountNumber placeholder "Bank Account Number"]
</div>
<div class="col-12 py-3">
<label for="accountType">Account Type</label>
[select* accountType id:accountType include_blank "Checking" "Saving"]
</div>
<div class="col-12 py-3 col-md-8">
<label for="bankName">Bank Name</label>
[text* bankName id:bankName placeholder "Bank Name"]
</div>
<div class="col-12 py-3 col-md-4">
<label for="monthsBank">Time with Current Bank (months)</label>
[number* monthsBank min:0 id:monthsBank placeholder "Time with Current Bank (months)"]
</div>
<div class="col-12 py-3">
<label for="directDeposit">Do you have direct deposit? </label>
[checkbox* directDeposit id:directDeposit use_label_element exclusive "Yes" "No"]
</div>
<div class="col-12 py-3">
<label for="bankPhone">Bank Phone</label>
[tel* bankPhone id:bankPhone placeholder "Bank Phone Number"]
</div>
<div class="col-12 col-md-6 py-3">
<label for="license">License Number</label>
[number* license min:0 id:license "Drivers License"]
</div>
<div class="col-12 col-md-6 py-3">
<label for="licenseState">Which State is your License Registered In</label>
[select* licenseState"Alabama|AL" "Alaska|AK" "Arizona|AZ" "Arkansas|AR" "California|CA" "Colorado|CO" "Connecticut|CT" "Delaware|DE" "Washington DC|DC" "Florida|FL" "Georgia|GA" "Hawaii|HI" "Idaho|ID" "Illinois|IL" "Indiana|IN" "Iowa|IA" "Kansas|KS" "Kentucky|KY" "Louisiana|LA" "Maine|ME"  "Maryland|MD" "Massachusetts|MA" "Michigan|MI" "Minnesota|MN" "Mississippi|MS" "Missouri|MO" "Montana|MT" "Nebraska|NE" "Nevada|NV" "New Hampshire|NH" "New Jersey|NJ" "New Mexico|NM" "New York|NY" "North Carolina|NC" "North Dakota|ND" "Ohio|OH" "Oklahoma|OK" "Oregon|OR" "Pennslyvania|PA" "Rhode Island|RI" "South Carolina|SC" "South Dakota|SD" "Tennessee|TN" "Texas|TX" "Utah|UT" "Vermont|VT" "Virginia|VA" "Washington|WA" "West Virginia|WV" "Wisconsin|WI" "Wyoming|WY"]
</div>
<div class="col-12 py-3">
<label for="ownCar">Do you own a car</label>
[checkbox* ownCar id:ownCar use_label_element exclusive "Yes" "No"]
</div>
<div class="col-12 py-3">
<label for="armedForces">Are you an active member of the armed forces?</label>
[checkbox* armedForces id:armedForces use_label_element exclusive "Yes" "No"]
</div>
<div class="col-12 py-3">
[submit class:w-100 class:btn-link__primary "Submit Application"]
</div>
</div>