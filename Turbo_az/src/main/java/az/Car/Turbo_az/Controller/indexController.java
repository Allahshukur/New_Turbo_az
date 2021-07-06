package az.Car.Turbo_az.Controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
public class indexController {

    @RequestMapping("/index")
    public String index(){
        return "index";
    }

    @RequestMapping("/aboutCar")
    public String file(){
        return "aboutCar";
    }

//    @RequestMapping("/aboutCar/id")
//    public String fileId(){
//        return "redirect:/aboutCar";
//    }
}
