Feature: Testing of Calculator

  Scenario Outline: Test all functions
    Given I open the web page
    When I enter <first_num> as first number
      And I enter <second_num> as second number
      And I select <operation> as type of operation
    Then The result should be <expected>

    Examples:
      | first_num | second_num | operation | expected |
      | 10        | 5          | +         | 15       |
      | 5.5       | 2.3        | -         | 3.2      |
      | 2         | 3          | *         | 6        |
      | 10        | 4          | /         | 2.5      |