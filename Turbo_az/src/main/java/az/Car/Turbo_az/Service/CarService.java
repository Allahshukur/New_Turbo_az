package az.Car.Turbo_az.Service;

import az.Car.Turbo_az.Dto.Dto.CarDto;
import az.Car.Turbo_az.Entity.CarEntity;
import az.Car.Turbo_az.Respository.CarRepository;
import org.springframework.stereotype.Service;

import javax.imageio.ImageIO;
import java.awt.image.BufferedImage;
import java.io.File;
import java.io.IOException;
import java.math.BigDecimal;
import java.util.ArrayList;
import java.util.List;
import java.util.Optional;

@Service
public class CarService {

    private final CarRepository carRepository;

    public CarService(CarRepository carRepository) {
        this.carRepository = carRepository;
    }

    public CarDto findById(Integer id) {
        Optional<CarEntity> optional = carRepository.findById(id);
        if (optional.isPresent()) {                // icerisinde opyekt varsa dovre gir
            return CarDto.instance(carRepository.findById(id).get());
        } else {
            return null;
        }
    }

    public CarDto deleteById(Integer id){
        CarDto carDto = findById(id);
        carRepository.deleteById(id);
        return carDto;
    }

    public List<CarDto> findAll(String mark, BigDecimal money, String model, Integer year) {

        List<CarEntity> list;

        if (isAllEmpty(mark, money, model, year)) {
            list = carRepository.findAll();
        } else
            list = carRepository.findByMarkOrMoneyOrModelOrYear(mark, money, model, year);

        List<CarDto> result = new ArrayList<>();

        for (CarEntity carE : list) {
            CarDto carDto = new CarDto()
                    .setId(carE.getId())
                    .setMark(carE.getMark())
                    .setMoney(carE.getMoney())
                    .setModel(carE.getModel())
                    .setYear(carE.getYear())
                    .setKm(carE.getKm())
                    .setMotor(carE.getMotor())
                    .setPhoto(carE.getPhoto());
            result.add(carDto);
        }
        return result;
    }

    public static boolean isAllEmpty(Object... objects) {
        for (Object obj : objects) {
            if (obj != null && !obj.toString().isEmpty()) {
                return false;
            }
        }
        return true;
    }

    public void save(CarDto carDto) {
        carRepository.save(carDto.toEntity());
    }

    public void update(CarDto carDto){
        if (carRepository.getOne(carDto.getId())==null){
            throw new IllegalArgumentException("not found");
        }
        carRepository.save(carDto.toEntity());
    }

    public void imageWrite(String image) {
        BufferedImage bImage = null;
        try {
            File initialImage = new File(image);
            bImage = ImageIO.read(initialImage);

            ImageIO.write(bImage, "jpg", new File("src/main/resources/static/Images/" + initialImage.getName()));

        } catch (IOException e) {
            System.out.println("Exception occured :" + e.getMessage());
        }
        System.out.println("Images were written succesfully.");
    }

}
