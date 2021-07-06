package az.Car.Turbo_az.Dto.Dto;

import az.Car.Turbo_az.Entity.CarEntity;

import java.math.BigDecimal;

public class CarDto {

    private Integer id;
    private String mark;
    private String model;
    private BigDecimal money;
    private Integer year;
    private String photo;
    private Double motor;
    private Long km;

    public Integer getId() {
        return id;
    }

    public CarDto setId(Integer id) {
        this.id = id;
        return this;
    }

    public String getMark() {
        return mark;
    }

    public CarDto setMark(String mark) {
        this.mark = mark;
        return this;
    }

    public String getModel() {
        return model;
    }

    public CarDto setModel(String model) {
        this.model = model;
        return this;
    }

    public Integer getYear() {
        return year;
    }

    public CarDto setYear(Integer year) {
        this.year = year;
        return this;
    }

    public String getPhoto() {
        return photo;
    }

    public CarDto setPhoto(String photo) {
        this.photo = photo;
        return this;
    }

    public BigDecimal getMoney() {
        return money;
    }

    public CarDto setMoney(BigDecimal money) {
        this.money = money;
        return this;
    }

    public Double getMotor() {
        return motor;
    }

    public CarDto setMotor(Double motor) {
        this.motor = motor;
        return this;
    }

    public Long getKm() {
        return km;
    }

    public CarDto setKm(Long km) {
        this.km = km;
        return this;
    }

    public CarEntity toEntity() {
        return new CarEntity()
                .setId(this.getId())
                .setMark(this.getMark())
                .setModel(this.getModel())
                .setMoney(this.getMoney())
                .setYear(this.getYear())
                .setPhoto(this.getPhoto())
                .setMotor(this.getMotor())
                .setKm(this.getKm());
    }

    public static CarDto instance(CarEntity carEntity) {
        CarDto carDto = new CarDto();
        carDto.setId(carEntity.getId());
        carDto.setMark(carEntity.getMark());
        carDto.setModel(carEntity.getModel());
        carDto.setMoney(carEntity.getMoney());
        carDto.setYear(carEntity.getYear());
        carDto.setPhoto(carEntity.getPhoto());
        carDto.setMotor(carEntity.getMotor());
        carDto.setKm(carEntity.getKm());
        return carDto;
    }
}
