const { validate } = require("class-validator");

module.exports = (dtoClass) => {
  return async (req, res, next) => {
    const dtoInstance = dtoClass(req.body);
    const errors = await validate(dtoInstance);

    if (errors.length > 0) {
      return res.status(400).json({
        message: "Validation failed",
        errors: errors.map((error) => ({
          property: error.property,
          constraints: error.constraints,
        })),
      });
    }
    req.body = dtoInstance;
    next();
  };
};
