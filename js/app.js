$( function() {
    var availableAreas = [
        'Business Dev / Partnerships','Business Strategy','Data & Analytics','Design','Engineering','Finance','Human Resources','IT & Cybersecurity','Legal','Marketing','Operations','Other','People Ops','Product','Project Management','Sales','Support'
    ];
    var availableSeniority = [
        'entry-level','mid-level','senior-level','z-management'
    ];
    var availablePerks = [
        'remote friendly','unlimited vacation','paid parental leave','latinxintech','women in tech erg','lgbtqi erg'
    ];
    var availableLocation = [
        'AZ-Phoenix ','CA-San Francisco ','FL-Orlando ','IL-Chicago ','IN-Indianapolis ',' MI-Other ','MO-St. Louis ','NJ-Jersey City ','TX-Austin ','TX-Dallas ','NE-Omaha',' CA-Other ','UT-Salt Lake City ','FL-Other ','WA-Seattle ','CO-Denver','GA-Atlanta ',' Hybrid ','DC-Washington ','DC-Other ','MD-Baltimore ','MD-Other ','NY-New York City ',' NY-Other ','VA-Arlington ','VA-Other ','IL-Chicago ','MA-Boston ','MA-Other ','Mexico ',' Mexico-Remote ','MN-Other ','OR-Portland ','Remote ','AZ-Phoenix ','IL-Chicago ','TN-Nashville ','WA-Seattle ','UT-Other '
    ];
    $( "#area" ).autocomplete({
      source: availableAreas
    });
    $( "#seniority" ).autocomplete({
        source: availableSeniority
    });
    $( "#perks" ).autocomplete({
    source: availablePerks
    });
    $( "#location" ).autocomplete({
    source: availableLocation
    });
  } );
