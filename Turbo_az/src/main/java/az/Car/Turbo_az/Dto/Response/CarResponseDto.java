package az.Car.Turbo_az.Dto.Response;

import az.Car.Turbo_az.Dto.Dto.CarDto;

import java.math.BigDecimal;

public class CarResponseDto {

    private Integer id;
    private String mark;
    private String model;
    private BigDecimal money;
    private Integer year;
    private String photo;
    private Double motor;
    private Long km;
    private String favorite;

    public Integer getId() {
        return id;
    }

    public CarResponseDto setId(Integer id) {
        this.id = id;
        return this;
    }

    public String getMark() {
        return mark;
    }

    public CarResponseDto setMark(String mark) {
        this.mark = mark;
        return this;
    }

    public String getModel() {
        return model;
    }

    public CarResponseDto setModel(String model) {
        this.model = model;
        return this;
    }

    public BigDecimal getMoney() {
        return money;
    }

    public CarResponseDto setMoney(BigDecimal money) {
        this.money = money;
        return this;
    }

    public Integer getYear() {
        return year;
    }

    public CarResponseDto setYear(Integer year) {
        this.year = year;
        return this;
    }

    public String getPhoto() {
        return photo;
    }

    public CarResponseDto setPhoto(String photo) {
        this.photo = photo;
        return this;
    }

    public Double getMotor() {
        return motor;
    }

    public CarResponseDto setMotor(Double motor) {
        this.motor = motor;
        return this;
    }

    public Long getKm() {
        return km;
    }

    public CarResponseDto setKm(Long km) {
        this.km = km;
        return this;
    }

    public String getFavorite() {
        return favorite;
    }

    public CarResponseDto setFavorite(String favorite) {
        this.favorite = favorite;
        return this;
    }

    public static CarResponseDto instance(CarDto carDto) {
        CarResponseDto carResponseDto = new CarResponseDto();
        carResponseDto.setId(carDto.getId());
        carResponseDto.setMark(carDto.getMark());
        carResponseDto.setModel(carDto.getModel());
        carResponseDto.setMoney(carDto.getMoney());
        carResponseDto.setYear(carDto.getYear());
        carResponseDto.setPhoto(carDto.getPhoto());
        carResponseDto.setMotor(carDto.getMotor());
        carResponseDto.setKm(carDto.getKm());
        carResponseDto.setFavorite(carDto.getFavorite());
        return carResponseDto;
    }

    public static CarResponseDto instanceFavorite(CarDto carDto) {
        if (carDto.getFavorite() != null) {
            CarResponseDto carResponseDto = new CarResponseDto();
            if (carDto.getFavorite().equals("checked")) {
                carResponseDto.setId(carDto.getId());
                carResponseDto.setMark(carDto.getMark());
                carResponseDto.setModel(carDto.getModel());
                carResponseDto.setMoney(carDto.getMoney());
                carResponseDto.setYear(carDto.getYear());
                carResponseDto.setPhoto(carDto.getPhoto());
                carResponseDto.setMotor(carDto.getMotor());
                carResponseDto.setKm(carDto.getKm());
                carResponseDto.setFavorite(carDto.getFavorite());
                return carResponseDto;
            }
        }
        return null;
    }
}
