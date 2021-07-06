package az.Car.Turbo_az.Controller;

import az.Car.Turbo_az.Dto.Dto.CarDto;
import az.Car.Turbo_az.Dto.Request.CarRequestDto;
import az.Car.Turbo_az.Dto.Response.CarResponseDto;
import az.Car.Turbo_az.Entity.CarEntity;
import az.Car.Turbo_az.Respository.CarRepository;
import az.Car.Turbo_az.Service.CarService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import java.math.BigDecimal;
import java.util.ArrayList;
import java.util.List;

@RestController
@RequestMapping(value = "Rest/Cars")
public class CarController {

    @Autowired
    private CarService carService;

    @GetMapping()
    public List<CarResponseDto> search(
            @RequestParam(required = false) String mark,
            @RequestParam(required = false) BigDecimal money,
            @RequestParam(required = false) String model,
            @RequestParam(required = false) Integer year
    ) {

        List<CarDto> list= carService.findAll(
                mark,
                money,
                model,
                year
        );

        List<CarResponseDto> result = new ArrayList<>();

        for (CarDto carE: list){
           result.add(CarResponseDto.instance(carE));
        }
        return result;

    }

    @GetMapping(value ="/{id}")
    public CarResponseDto getById(@PathVariable Integer id){
        return CarResponseDto.instance(carService.findById(id));
    }


    @PostMapping()
    public String Add(@RequestBody CarRequestDto carRequestDto){
        carService.save(carRequestDto.toDto());
        return carRequestDto.toString();
    }

    @PutMapping
    public String update(@RequestBody CarRequestDto carRequestDto){
        carService.update(carRequestDto.toDto());
        return carRequestDto.toString();
    }

    @DeleteMapping("{id}")
    public ResponseEntity<CarResponseDto> deleteById(@PathVariable("id") Integer id){
        if (carService.findById(id)==null){
            return ResponseEntity.status(HttpStatus.NOT_FOUND).build();
        }
        else {
            return ResponseEntity.status(HttpStatus.OK).body(CarResponseDto.instance(carService.deleteById(id)));
        }
    }

}
