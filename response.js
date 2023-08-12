function getBotResponse(input) {
   

    // Simple responses
    if (input == "hello") {
        return "Hello there!";
    } else if (input == "duration of internship") {
        return " 20 Days,45 days,3 months,4 months ,6 months";
    }else if (input == "all courses") {
        return "PCB Designing , IOT, PCP, ML in python, Data entry, Media content developer, KYP, ADHNS , A-Levrel,O-Level ";
    }
    else if (input == "bye") {
            return "Talk to you later!";
        }else if (input == "hello admin") {
            return "hey user!";

         } 
     else {
        return "Try asking something else or visit message enquiry section";
    }
}