const express = require("express");
const mongoose = require("mongoose");
const path = require("path");

mongoose.connect(
  "mongodb+srv://IshaanOhri:hello123@urls.7gw6g.gcp.mongodb.net/Bank?retryWrites=true&w=majority",
  { useNewUrlParser: true, useUnifiedTopology: true, useCreateIndex: true },
  (error) => {
    if (error) {
      console.log(`Database connection failed\n${error}`);
      return;
    }

    console.log("Database connection successful");
  }
);

const app = express();

app.use(express.json());
app.use(
  express.static(path.join(__dirname, "./"), {
    index: "index.html",
  })
);

const AccountSchema = new mongoose.Schema({
  account: {
    type: Number,
    required: true,
  },
  balance: {
    type: Number,
    required: true,
  },
});

const Account = mongoose.model("Account", AccountSchema);

app.post("/debit", async (req, res) => {
  const { account, amount } = req.body;

  const user = await Account.findOne({ account });

  if (user.balance < amount) {
    res.send({
      success: false,
      message: "Insufficient balance",
    });
    return;
  }

  user.balance -= amount;

  await user.save();

  res.send({
    success: true,
    message: `Balance deducted successfully. New balance is Rs ${user.balance}`,
  });
});

app.post("/create", async (req, res) => {
  const { account, amount } = req.body;

  const user = new Account({
    account,
    balance: amount,
  });

  await user.save();

  res.send({
    success: true,
  });
});

const PORT = 4000;

app.listen(PORT, () => {
  console.log(`Server running on http://localhost:${PORT}`);
});
