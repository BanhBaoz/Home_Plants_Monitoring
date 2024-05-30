const express = require("express");
const app = express();
app.use(
  cors({
    origin: "http://127.0.0.1:3000",
  })
);

app.get("/data", (req, res) => {});
