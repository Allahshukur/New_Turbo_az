package az.Car.Turbo_az.Entity;

import org.thymeleaf.expression.Dates;

import javax.persistence.*;
import java.math.BigDecimal;

@Entity
@Table(name = "cars")
public class CarEntity {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Integer id;
    private String mark;
    private String model;
    private Integer year;
    private String photo;
    private BigDecimal money;
    private Double motor;
    private Long km;

    public Integer getId() {
        return id;
    }

    public CarEntity setId(Integer id) {
        this.id = id;
        return this;
    }

    public String getMark() {
        return mark;
    }

    public CarEntity setMark(String mark) {
        this.mark = mark;
        return this;
    }

    public String getModel() {
        return model;
    }

    public CarEntity setModel(String model) {
        this.model = model;
        return this;
    }

    public Integer getYear() {
        return year;
    }

    public CarEntity setYear(Integer year) {
        this.year = year;
        return this;
    }

    public String getPhoto() {
        return photo;
    }

    public CarEntity setPhoto(String photo) {
        this.photo = photo;
        return this;
    }

    public BigDecimal getMoney() {
        return money;
    }

    public CarEntity setMoney(BigDecimal money) {
        this.money = money;
        return this;
    }

    public Double getMotor() {
        return motor;
    }

    public CarEntity setMotor(Double motor) {
        this.motor = motor;
        return this;
    }

    public Long getKm() {
        return km;
    }

    public CarEntity setKm(Long km) {
        this.km = km;
        return this;
    }
}
