Case Study: Open/Closed Principle (OCP)
=======================================

Overview
--------

This case study explores the implementation of the Open/Closed Principle (OCP) in a PHP application. OCP, one of the five SOLID design principles, states that software entities should be open for extension but closed for modification. This means that you can add new functionality without changing the existing code, which helps in avoiding bugs and preserving the stability of the system.

Problem Statement
-----------------

The original codebase had an AreaCalculatorService class that violated the OCP by handling the area calculations for different shapes directly within the class:

*   The service calculated areas based on specific shape types (Square, Triangle), which required conditional logic inside the method.
    
*   Adding new shapes required modifying the AreaCalculatorService class, increasing the risk of introducing bugs and making the code harder to maintain.
    

This design violated OCP because it required changes to the existing AreaCalculatorService every time a new shape was added, leading to code that was less maintainable and harder to extend.

Refactoring Process
-------------------

To comply with OCP, we refactored the AreaCalculatorService class by introducing a ShapeableContract interface. Each shape class now implements this interface and provides its own area() method, encapsulating the logic required to calculate its area. The AreaCalculatorService class was updated to depend on the ShapeableContract interface, eliminating the need for conditional logic and making the class open for extension but closed for modification.

*   Original implementation: [https://github.com/thiiagoms/open-closed-php/commit/c643566b9c911de6ce9b584c2662cafaa1bee68e](https://github.com/thiiagoms/open-closed-php/commit/c643566b9c911de6ce9b584c2662cafaa1bee68e)
    
*   Refactored Implementation: [https://github.com/thiiagoms/open-closed-php/commit/fcb48518757e0c0becb6ac41d70f5d99a540707f](https://github.com/thiiagoms/open-closed-php/commit/fcb48518757e0c0becb6ac41d70f5d99a540707f)
    

Benefits of OCP
---------------

### 1\. **Maintainability**

*   The code is easier to maintain because the AreaCalculatorService no longer needs to be modified when new shapes are added. Instead, new shapes can be introduced by implementing the ShapeableContract interface.
    

### 2\. **Testability**

*   Each shape class can be tested independently, and the AreaCalculatorService can be tested in isolation without worrying about specific shape implementations.
    

### 3\. **Flexibility**

*   The application is more flexible and can easily accommodate new shapes without affecting the existing functionality, adhering to the Open/Closed Principle.
    

### 4\. **Readability**

*   The code is more readable because the logic for calculating the area of each shape is encapsulated within the shape classes themselves, making the AreaCalculatorService focused and straightforward.

Use application:
----------------
```bash
$ git clone https://github.com/thiiagoms/open-closed-php
$ cd open-closed-php
open-closed-php $ docker-compose up -d
open-closed-php $ docker-compose exec app bash
thiiagoms@eae0b5e7b374:/var/www$ composer install -vvv
thiiagoms@eae0b5e7b374:/var/www$ php app.php
```

Conclusion
----------

By applying the Open/Closed Principle, we have created a more modular, maintainable, and testable codebase. This refactor allows for easier extension of functionality and better adherence to SOLID principles, resulting in a more robust and scalable application.