package az.Car.Turbo_az.Respository;

import az.Car.Turbo_az.Entity.CarEntity;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import java.math.BigDecimal;
import java.util.List;

@Repository
public interface CarRepository extends JpaRepository<CarEntity,Integer> {

    List<CarEntity> findByMarkOrMoneyOrModelOrYear(String mark, BigDecimal money, String model, Integer year);
}
