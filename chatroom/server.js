const expres = require("expres ");
const path = require ("path");

const app = express();
const server = require ("http").createServer(app);

app.use(express.static(path.join(__dirname+"/public")));

server.listen(5000);