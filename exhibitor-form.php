<h2>Organization/Ministry</h2>

<legend>Org/Ministry Name<sup>*</sup></legend>
[text* org-name] 

<legend>Address<sup>*</sup></legend>
[text* streetplaceholder "Street Address"]
[text city id:city placeholder "City"] [text* state /2 id:state placeholder "XX"] [text zip id:zip placeholder "Zip/Postal Code"]

<legend>Email<sup>*</sup></legend>
[email org-email id:org-email class:email placeholder "org@email.com"]

<legend>Phone</legend>
[tel org-tel id:org-tel class:tel placeholder "(555) 555-5555"]

<legend>Website</legend>
[url org-url id:org-url class:url "http://"]

<h2>Contact Person</h2>
<legend>Your Name<sup>*</sup></legend>
[text* contact-name] 

<legend>Your Email<sup>*</sup></legend>
[email* contact-email class:email] 

<legend>Contact Person</legend>
[tel* contact-tel id:contact-tel class:tel placeholder "(555) 555-5555"]

<legend>Please briefly share what your ministry/organization (mission, purpose, etc.)</legend>
[textarea org-mission id:org-mission]

<legend>Have you particiated as an exhibitor at previous True Woman events?</legend>
[radio participated id:participated use_label_element "Yes" "No"]

<legend>Are you interested in selling resources? /legend>
[radio selling id:selling use_label_element "Yes" "No"]

<div class="form-actions">[submit "Send"]</div>









ORGANIZATION/MINISTRY
[org-name]
[street]
[city], [state] [zip]
[phone]
[website]


CONTACT PERSON
[contact-name]
[contact-email]
[contact-tel]

MISSION/PURPOSE OF ORGANIZATION
[org-mission]

PARTICIPATED AS EXIBITOR BEFORE?
[participated]

INTERESTED IN SELLING RESOURCES?
[selling]