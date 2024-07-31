const { IsString, IsEmail, MinLength } = require("class-validator");
const { plainToClass } = require("class-transformer");

class CreateUserDTO {
  @IsString()
  @MinLength(1)
  firstName;

  @IsString()
  @MinLength(1)
  lastName;

  @IsEmail()
  email;

  @IsString()
  @MinLength(6)
  password;
}

function createUserDto(data) {
  return plainToClass(CreateUserDTO, data);
}

module.exports = { CreateUserDTO, createUserDto };
