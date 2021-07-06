package az.Car.Turbo_az.Dto.Request;

import az.Car.Turbo_az.Dto.Dto.CarDto;

import java.math.BigDecimal;

public class CarRequestDto {

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

    public CarRequestDto setId(Integer id) {
        this.id = id;
        return this;
    }

    public String getMark() {
        return mark;
    }

    public CarRequestDto setMark(String mark) {
        this.mark = mark;
        return this;
    }

    public String getModel() {
        return model;
    }

    public CarRequestDto setModel(String model) {
        this.model = model;
        return this;
    }

    public BigDecimal getMoney() {
        return money;
    }

    public CarRequestDto setMoney(BigDecimal money) {
        this.money = money;
        return this;
    }

    public Integer getYear() {
        return year;
    }

    public CarRequestDto setYear(Integer year) {
        this.year = year;
        return this;
    }

    public String getPhoto() {
        return photo;
    }

    public CarRequestDto setPhoto(String photo) {
        this.photo = photo;
        return this;
    }

    public Double getMotor() {
        return motor;
    }

    public CarRequestDto setMotor(Double motor) {
        this.motor = motor;
        return this;
    }

    public Long getKm() {
        return km;
    }

    public CarRequestDto setKm(Long km) {
        this.km = km;
        return this;
    }

    public CarDto toDto(){
        return new CarDto()
                .setId(this.getId())
                .setMark(this.getMark())
                .setModel(this.getModel())
                .setMoney(this.getMoney())
                .setYear(this.getYear())
                .setPhoto(this.getPhoto())
                .setMotor(this.getMotor())
                .setKm(this.getKm());
    }

    @Override
    public String toString() {
        return "CarRequestDto{" +
                ", mark='" + mark + '\'' +
                ", model='" + model + '\'' +
                ", money=" + money +
                ", year=" + year +
                ", photo='" + photo + '\'' +
                ", motor=" + motor +
                ", km=" + km +
                '}';
    }
}
